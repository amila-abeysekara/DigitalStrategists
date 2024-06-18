<?php
/*
 * @copyright Copyright (c) 2023 AltumCode (https://altumcode.com/)
 *
 * This software is exclusively sold through https://altumcode.com/ by the AltumCode author.
 * Downloading this product from any other sources and running it without a proper license is illegal,
 *  except the official ones linked from https://altumcode.com/.
 */

namespace Altum\Controllers;

use Altum\Meta;

class Index extends Controller {

    public function index() {

        /* Custom index redirect if set */
        if(!empty(settings()->main->index_url)) {
            header('Location: ' . settings()->main->index_url); die();
        }

        /* Plans View */
        $view = new \Altum\View('partials/plans', (array) $this);
        $this->add_view_content('plans', $view->run());

        /* Meta */
        Meta::set_canonical_url();

        /* Opengraph image */
        if(settings()->main->opengraph) {
            Meta::set_social_url(SITE_URL);
            Meta::set_social_description(l('index.meta_description'));
            Meta::set_social_image(\Altum\Uploads::get_full_url('opengraph') . settings()->main->opengraph);
        }

        /* Check if the cache exists */
        $cache_instance = \Altum\Cache::$adapter->getItem('index_stats');

        /* Set cache if not existing */
        if(is_null($cache_instance->get())) {

            if(settings()->aix->documents_is_enabled) {
                $total_documents = database()->query("SELECT MAX(`document_id`) AS `total` FROM `documents`")->fetch_object()->total ?? 0;
            }

            if(settings()->aix->images_is_enabled && settings()->aix->images_display_latest_on_index) {
                $total_images = database()->query("SELECT MAX(`image_id`) AS `total` FROM `images`")->fetch_object()->total ?? 0;
                $images = db()->orderBy('image_id', 'DESC')->get('images', 16);
            }

            $stats = [
                'total_documents' => $total_documents ?? null,
                'total_images' => $total_images ?? null,
                'images' => $images ?? [],
            ];

            /* Save to cache */
            \Altum\Cache::$adapter->save($cache_instance->set($stats)->expiresAfter(3600));

        } else {

            /* Get cache */
            $stats = $cache_instance->get();
            extract($stats);

        }

        /* Get available templates categories */
        $templates_categories = (new \Altum\Models\TemplatesCategories())->get_templates_categories();

        /* Templates */
        $templates = (new \Altum\Models\Templates())->get_templates();

        if(settings()->aix->chats_is_enabled) {
            $chat_messages = [
                (object) [
                    'role' => 'user',
                    'content' => l('index.chats.messages.one'),
                ],
                (object) [
                    'role' => 'assistant',
                    'content' => l('index.chats.messages.two'),
                ],
                (object) [
                    'role' => 'user',
                    'content' => l('index.chats.messages.three'),
                ],
                (object) [
                    'role' => 'assistant',
                    'content' => l('index.chats.messages.four'),
                ],
            ];
        }

        /* Main View */
        $data = [
            'total_documents' => $total_documents,
            'total_images' => $total_images,
            'images' => $images,
            'templates' => $templates,
            'templates_categories' => $templates_categories,
            'chat_messages' => $chat_messages ?? [],
        ];

        $view = new \Altum\View('index/index', (array) $this);

        $this->add_view_content('content', $view->run($data));

    }

}
