<?php defined('ALTUMCODE') || die() ?>

<div>
    <?php if(!in_array(settings()->license->type, ['Extended License', 'extended'])): ?>
        <div class="alert alert-primary" role="alert">
            You need to own the Extended License in order to activate the payment system.
        </div>
    <?php endif ?>

    <div class="<?= !in_array(settings()->license->type, ['Extended License', 'extended']) ? 'container-disabled' : null ?>">
        <div class="form-group custom-control custom-switch">
            <input id="is_enabled" name="is_enabled" type="checkbox" class="custom-control-input" <?= settings()->stripe->is_enabled ? 'checked="checked"' : null?>>
            <label class="custom-control-label" for="is_enabled"><?= l('admin_settings.stripe.is_enabled') ?></label>
        </div>

        <div class="form-group">
            <label for="publishable_key"><?= l('admin_settings.stripe.publishable_key') ?></label>
            <input id="publishable_key" type="text" name="publishable_key" class="form-control" value="<?= settings()->stripe->publishable_key ?>" />
        </div>

        <div class="form-group">
            <label for="secret_key"><?= l('admin_settings.stripe.secret_key') ?></label>
            <input id="secret_key" type="text" name="secret_key" class="form-control" value="<?= settings()->stripe->secret_key ?>" />
        </div>

        <div class="form-group">
            <label for="webhook_secret"><?= l('admin_settings.stripe.webhook_secret') ?></label>
            <input id="webhook_secret" type="text" name="webhook_secret" class="form-control" value="<?= settings()->stripe->webhook_secret ?>" />
        </div>

        <div class="form-group">
            <label for="webhook_url"><?= l('admin_settings.payment.webhook_url') ?></label>
            <input type="text" id="webhook_url" value="<?= SITE_URL . 'webhook-stripe' ?>" class="form-control" onclick="this.select();" readonly="readonly" />
        </div>
    </div>
</div>

<button type="submit" name="submit" class="btn btn-lg btn-block btn-primary mt-4"><?= l('global.update') ?></button>
