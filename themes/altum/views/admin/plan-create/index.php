<?php defined('ALTUMCODE') || die() ?>

<nav aria-label="breadcrumb">
    <ol class="custom-breadcrumbs small">
        <li>
            <a href="<?= url('admin/plans') ?>"><?= l('admin_plans.breadcrumb') ?></a><i class="fas fa-fw fa-angle-right"></i>
        </li>
        <li class="active" aria-current="page"><?= l('admin_plan_create.breadcrumb') ?></li>
    </ol>
</nav>

<div class="d-flex justify-content-between mb-4">
    <h1 class="h3 mb-0 mr-1"><i class="fas fa-fw fa-xs fa-box-open text-primary-900 mr-2"></i> <?= l('admin_plan_create.header') ?></h1>
</div>

<?= \Altum\Alerts::output_alerts() ?>

<div class="card">
    <div class="card-body">

        <form action="" method="post" role="form">
            <input type="hidden" name="token" value="<?= \Altum\Csrf::get() ?>" />

            <div class="form-group">
                <label for="name"><?= l('global.name') ?></label>
                <input type="text" id="name" name="name" class="form-control <?= \Altum\Alerts::has_field_errors('name') ? 'is-invalid' : null ?>" required="required" />
                <?= \Altum\Alerts::output_field_error('name') ?>
            </div>

            <div class="form-group">
                <label for="description"><?= l('global.description') ?></label>
                <input type="text" id="description" name="description" class="form-control <?= \Altum\Alerts::has_field_errors('description') ? 'is-invalid' : null ?>" value="" />
                <?= \Altum\Alerts::output_field_error('description') ?>
            </div>

            <div class="form-group">
                <label for="order"><?= l('global.order') ?></label>
                <input type="number" min="0" id="order" name="order" class="form-control" value="" />
            </div>

            <div class="form-group">
                <label for="trial_days"><?= l('admin_plans.main.trial_days') ?></label>
                <input id="trial_days" type="number" min="0" name="trial_days" class="form-control" value="0" />
                <div><small class="form-text text-muted"><?= l('admin_plans.main.trial_days_help') ?></small></div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-xl-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="monthly_price"><?= l('admin_plans.main.monthly_price') ?> <small class="form-text text-muted"><?= settings()->payment->currency ?></small></label>
                            <input type="text" id="monthly_price" name="monthly_price" class="form-control <?= \Altum\Alerts::has_field_errors('monthly_price') ? 'is-invalid' : null ?>" required="required" />
                            <?= \Altum\Alerts::output_field_error('monthly_price') ?>
                            <small class="form-text text-muted"><?= sprintf(l('admin_plans.main.price_help'), l('admin_plans.main.monthly_price')) ?></small>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-xl-4">
                    <div class="form-group">
                        <label for="annual_price"><?= l('admin_plans.main.annual_price') ?> <small class="form-text text-muted"><?= settings()->payment->currency ?></small></label>
                        <input type="text" id="annual_price" name="annual_price" class="form-control <?= \Altum\Alerts::has_field_errors('annual_price') ? 'is-invalid' : null ?>" required="required" />
                        <?= \Altum\Alerts::output_field_error('annual_price') ?>
                        <small class="form-text text-muted"><?= sprintf(l('admin_plans.main.price_help'), l('admin_plans.main.annual_price')) ?></small>
                    </div>
                </div>

                <div class="col-sm-12 col-xl-4">
                    <div class="form-group">
                        <label for="lifetime_price"><?= l('admin_plans.main.lifetime_price') ?> <small class="form-text text-muted"><?= settings()->payment->currency ?></small></label>
                        <input type="text" id="lifetime_price" name="lifetime_price" class="form-control <?= \Altum\Alerts::has_field_errors('lifetime_price') ? 'is-invalid' : null ?>" required="required" />
                        <?= \Altum\Alerts::output_field_error('lifetime_price') ?>
                        <small class="form-text text-muted"><?= sprintf(l('admin_plans.main.price_help'), l('admin_plans.main.lifetime_price')) ?></small>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="taxes_ids"><?= l('admin_plans.main.taxes_ids') ?></label>
                <select id="taxes_ids" name="taxes_ids[]" class="custom-select" multiple="multiple">
                    <?php if($data->taxes): ?>
                        <?php foreach($data->taxes as $tax): ?>
                            <option value="<?= $tax->tax_id ?>">
                                <?= $tax->name . ' - ' . $tax->description ?>
                            </option>
                        <?php endforeach ?>
                    <?php endif ?>
                </select>
                <small class="form-text text-muted"><?= sprintf(l('admin_plans.main.taxes_ids_help'), '<a href="' . url('admin/taxes') .'">', '</a>') ?></small>
            </div>

            <div class="form-group">
                <label for="codes_ids"><?= l('admin_plans.main.codes_ids') ?></label>
                <select id="codes_ids" name="codes_ids[]" class="custom-select" multiple="multiple">
                    <?php if($data->codes): ?>
                        <?php foreach($data->codes as $code): ?>
                            <option value="<?= $code->code_id ?>">
                                <?= $code->name . ' - ' . $code->code ?>
                            </option>
                        <?php endforeach ?>
                    <?php endif ?>
                </select>
                <small class="form-text text-muted"><?= sprintf(l('admin_plans.main.codes_ids_help'), '<a href="' . url('admin/codes') .'">', '</a>') ?></small>
            </div>

            <div class="form-group">
                <label for="color"><?= l('admin_plans.main.color') ?></label>
                <input type="text" id="color" name="color" class="form-control <?= \Altum\Alerts::has_field_errors('color') ? 'is-invalid' : null ?>" value="" />
                <?= \Altum\Alerts::output_field_error('color') ?>
                <small class="form-text text-muted"><?= l('admin_plans.main.color_help') ?></small>
            </div>

            <div class="form-group">
                <label for="status"><?= l('global.status') ?></label>
                <select id="status" name="status" class="custom-select">
                    <option value="1"><?= l('global.active') ?></option>
                    <option value="0"><?= l('global.disabled') ?></option>
                    <option value="2"><?= l('global.hidden') ?></option>
                </select>
            </div>

            <div class="mt-5"></div>

            <h2 class="h4"><?= l('admin_plans.plan.header') ?></h2>

            <div>
                <div class="form-group">
                    <label for="documents_model"><?= l('admin_plans.plan.documents_model') ?></label>
                    <select id="documents_model" name="documents_model" class="custom-select">
                        <?php foreach(require APP_PATH . 'includes/aix/ai_text_models.php' as $key => $value): ?>
                            <option value="<?= $key ?>"><?= $value['name'] . ' - ' . $key . ' (' . l('global.plan_settings.documents_model.' . str_replace('-', '_', $key)) . ')' ?></option>
                        <?php endforeach ?>
                    </select>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.documents_model_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="documents_per_month_limit"><?= l('admin_plans.plan.documents_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="documents_per_month_limit" name="documents_per_month_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="words_per_month_limit"><?= l('admin_plans.plan.words_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="words_per_month_limit" name="words_per_month_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="images_api"><?= l('admin_plans.plan.images_api') ?></label>
                    <select id="images_api" name="images_api" class="custom-select">
                        <?php foreach(require APP_PATH . 'includes/aix/ai_image_models.php' as $key => $value): ?>
                            <option value="<?= $key ?>"><?= $value['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.images_api_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="images_per_month_limit"><?= l('admin_plans.plan.images_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="images_per_month_limit" name="images_per_month_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="upscaled_images_per_month_limit"><?= l('admin_plans.plan.upscaled_images_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="upscaled_images_per_month_limit" name="upscaled_images_per_month_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="upscaled_images_file_size_limit"><?= l('admin_plans.plan.upscaled_images_file_size_limit') ?></label>
                    <div class="input-group">
                        <input type="number" id="upscaled_images_file_size_limit" name="upscaled_images_file_size_limit" min="0" max="<?= get_max_upload() > 30 ? 30 : get_max_upload() ?>" step="any" class="form-control" value="<?= get_max_upload() ?>" />
                        <div class="input-group-append">
                            <span class="input-group-text"><?= l('global.mb') ?></span>
                        </div>
                    </div>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.upscaled_images_file_size_limit_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="removed_background_images_per_month_limit"><?= l('admin_plans.plan.removed_background_images_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="removed_background_images_per_month_limit" name="removed_background_images_per_month_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="removed_background_images_file_size_limit"><?= l('admin_plans.plan.removed_background_images_file_size_limit') ?></label>
                    <div class="input-group">
                        <input type="number" id="removed_background_images_file_size_limit" name="removed_background_images_file_size_limit" min="0" max="<?= get_max_upload() > 30 ? 30 : get_max_upload() ?>" step="any" class="form-control" value="<?= get_max_upload() ?>" />
                        <div class="input-group-append">
                            <span class="input-group-text"><?= l('global.mb') ?></span>
                        </div>
                    </div>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.removed_background_images_file_size_limit_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="replaced_background_images_per_month_limit"><?= l('admin_plans.plan.replaced_background_images_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="replaced_background_images_per_month_limit" name="replaced_background_images_per_month_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="replaced_background_images_file_size_limit"><?= l('admin_plans.plan.replaced_background_images_file_size_limit') ?></label>
                    <div class="input-group">
                        <input type="number" id="replaced_background_images_file_size_limit" name="replaced_background_images_file_size_limit" min="0" max="<?= get_max_upload() > 30 ? 30 : get_max_upload() ?>" step="any" class="form-control" value="<?= get_max_upload() ?>" />
                        <div class="input-group-append">
                            <span class="input-group-text"><?= l('global.mb') ?></span>
                        </div>
                    </div>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.replaced_background_images_file_size_limit_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="transcriptions_per_month_limit"><?= l('admin_plans.plan.transcriptions_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="transcriptions_per_month_limit" name="transcriptions_per_month_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="transcriptions_file_size_limit"><?= l('admin_plans.plan.transcriptions_file_size_limit') ?></label>
                    <div class="input-group">
                        <input type="number" id="transcriptions_file_size_limit" name="transcriptions_file_size_limit" min="0" max="<?= get_max_upload() > 25 ? 25 : get_max_upload() ?>" step="any" class="form-control" value="<?= get_max_upload() ?>" />
                        <div class="input-group-append">
                            <span class="input-group-text"><?= l('global.mb') ?></span>
                        </div>
                    </div>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.transcriptions_file_size_limit_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="chats_model"><?= l('admin_plans.plan.chats_model') ?></label>
                    <select id="chats_model" name="chats_model" class="custom-select">
                        <?php foreach(require APP_PATH . 'includes/aix/ai_chat_models.php' as $key => $value): ?>
                            <option value="<?= $key ?>"><?= $value['name'] . ' - ' . $key . ' (' . l('global.plan_settings.documents_model.' . str_replace('-', '_', $key)) . ')' ?></option>
                        <?php endforeach ?>
                    </select>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.chats_model_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="chats_per_month_limit"><?= l('admin_plans.plan.chats_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="chats_per_month_limit" name="chats_per_month_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="chat_messages_per_chat_limit"><?= l('admin_plans.plan.chat_messages_per_chat_limit') ?></small></label>
                    <input type="number" id="chat_messages_per_chat_limit" name="chat_messages_per_chat_limit" min="-1" class="form-control" value="0" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="chat_image_size_limit"><?= l('admin_plans.plan.chat_image_size_limit') ?></label>
                    <div class="input-group">
                        <input type="number" id="chat_image_size_limit" name="chat_image_size_limit" min="0" max="<?= get_max_upload() > 2 ? 2 : get_max_upload() ?>" step="any" class="form-control" value="<?= get_max_upload() ?>" />
                        <div class="input-group-append">
                            <span class="input-group-text"><?= l('global.mb') ?></span>
                        </div>
                    </div>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.chat_image_size_limit_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="syntheses_api"><?= l('admin_plans.plan.syntheses_api') ?></label>
                    <select id="syntheses_api" name="syntheses_api" class="custom-select">
                        <?php foreach(require APP_PATH . 'includes/aix/ai_syntheses_apis.php' as $key => $value): ?>
                            <option value="<?= $key ?>"><?= $value['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <small class="form-text text-muted"><?= l('admin_plans.plan.syntheses_api_help') ?></small>
                </div>

                <div class="form-group">
                    <label for="syntheses_per_month_limit"><?= l('admin_plans.plan.syntheses_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="syntheses_per_month_limit" name="syntheses_per_month_limit" min="-1" class="form-control" value="0" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="synthesized_characters_per_month_limit"><?= l('admin_plans.plan.synthesized_characters_per_month_limit') ?> <small class="form-text text-muted"><?= l('admin_plans.plan.per_month') ?></small></label>
                    <input type="number" id="synthesized_characters_per_month_limit" name="synthesized_characters_per_month_limit" min="-1" class="form-control" value="0" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <div class="form-group">
                    <label for="projects_limit"><?= l('admin_plans.plan.projects_limit') ?></label>
                    <input type="number" id="projects_limit" name="projects_limit" min="-1" class="form-control" value="0" required="required" />
                    <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                </div>

                <?php if(\Altum\Plugin::is_active('teams')): ?>
                    <div class="form-group">
                        <label for="teams_limit"><?= l('admin_plans.plan.teams_limit') ?></label>
                        <input type="number" id="teams_limit" name="teams_limit" min="-1" class="form-control" value="0" required="required" />
                        <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                    </div>

                    <div class="form-group">
                        <label for="team_members_limit"><?= l('admin_plans.plan.team_members_limit') ?></label>
                        <input type="number" id="team_members_limit" name="team_members_limit" min="-1" class="form-control" value="0" required="required" />
                        <small class="form-text text-muted"><?= l('admin_plans.plan.unlimited') ?></small>
                    </div>
                <?php endif ?>

                <?php if(\Altum\Plugin::is_active('affiliate')): ?>
                    <div class="form-group">
                        <label for="affiliate_commission_percentage"><?= l('admin_plans.plan.affiliate_commission_percentage') ?></label>
                        <input type="number" id="affiliate_commission_percentage" name="affiliate_commission_percentage" min="0" max="100" class="form-control" value="0" required="required" />
                        <small class="form-text text-muted"><?= l('admin_plans.plan.affiliate_commission_percentage_help') ?></small>
                    </div>
                <?php endif ?>

                <div class="form-group custom-control custom-switch">
                    <input id="no_ads" name="no_ads" type="checkbox" class="custom-control-input">
                    <label class="custom-control-label" for="no_ads"><?= l('admin_plans.plan.no_ads') ?></label>
                    <div><small class="form-text text-muted"><?= l('admin_plans.plan.no_ads_help') ?></small></div>
                </div>

                <div class="form-group custom-control custom-switch">
                    <input id="api_is_enabled" name="api_is_enabled" type="checkbox" class="custom-control-input">
                    <label class="custom-control-label" for="api_is_enabled"><?= l('admin_plans.plan.api_is_enabled') ?></label>
                    <div><small class="form-text text-muted"><?= l('admin_plans.plan.api_is_enabled_help') ?></small></div>
                </div>
            </div>

            <button type="submit" name="submit" class="btn btn-lg btn-block btn-primary mt-4"><?= l('global.create') ?></button>

        </form>

    </div>
</div>
