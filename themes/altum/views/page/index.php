<?php defined('ALTUMCODE') || die() ?>

<div class="container">
    <!-- <nav aria-label="breadcrumb">
        
    </nav> -->

    <div class="card">
        <div class="card-body">
            <!-- <h1 class="h4 mb-1">?= $data->page->title ?></h1> -->

            <p class="small text-muted">
                <!-- <span data-toggle="tooltip" title="?= sprintf(l('global.last_datetime_tooltip'), \Altum\Date::get($data->page->last_datetime, 2)) ?>">?= sprintf(l('global.datetime_tooltip'), \Altum\Date::get($data->page->datetime, 2)) ?></span> -->

                <?php if($data->pages_category): ?>
                    &bull; <a href="<?= SITE_URL . ($data->pages_category->language ? \Altum\Language::$active_languages[$data->pages_category->language] . '/' : null) . 'pages/' . $data->pages_category->url ?>" class="text-muted"><?= $data->pages_category->title ?></a>
                <?php endif ?>

                <!-- ?php if(settings()->content->pages_views_is_enabled): ?>
                    <span> &bull; ?= sprintf(l('page.total_views'), nr($data->page->total_views)) ?></span>
                ?php endif ?> -->

                
            </p>

            <p><?= $data->page->description ?></p>

            <?= $data->page->content ?>
        </div>
    </div>

    <?php if(settings()->content->pages_share_is_enabled): ?>
        <div class="card mt-4">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <?= include_view(THEME_PATH . 'views/partials/share_buttons.php', ['url' => url(\Altum\Router::$original_request), 'class' => 'btn btn-gray-100 mb-2 mb-md-0 mr-md-3']) ?>
                </div>
            </div>
        </div>
    <?php endif ?>
</div>
