<?php defined('ALTUMCODE') || die() ?>

<div class="container mt-5" id="home"  >
    <?= \Altum\Alerts::output_alerts() ?>

    <div class="card index-pattern" style="background-color: rgba(255, 255, 255, 0);" >
    <div class="card-body py-5" style="background-image: url('<?= ASSETS_FULL_URL . 'images/HeaderBg1' . $value . '.png' ?>'); background-size: cover; background-position: center;">



            <div class="row justify-content-center">
                <div class="col-11 col-md-10 col-lg-8 col-xl-7">
                    <h1 class="index-header text-center mb-2" data-aos="fade-up"><?= l('index.header') ?></h1>
                </div>

                <div class="col-10 col-sm-8 col-lg-7 col-xl-6">
                    <p class="index-subheader text-center mb-5" data-aos="fade-up" data-aos-delay="100"><?= l('index.subheader') ?></p>
                </div>
            </div>

            <?php if(settings()->users->register_is_enabled && !\Altum\Authentication::check()): ?>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <a href="<?= url('register') ?>" class="btn btn-primary index1-button mb-2 mb-lg-0 mr-lg-2"><?= l('index.register') ?> <i class="fas fa-fw fa-sm fa-arrow-right"></i></a>
            

                </div>
            <?php endif ?>

            <?php if(\Altum\Authentication::check()): ?>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <a href="<?= url('document-create') ?>" class="btn btn-primary index1-button mb-2 mb-lg-0 mr-lg-2"><?= l('documents.create') ?> <i class="fas fa-fw fa-sm fa-arrow-right"></i></a>
                </div>
            <?php endif ?>

            <div class="d-flex justify-content-center mt-5">
  <ul class="list-style-none d-flex flex-column flex-lg-row features-list">
    <li class="d-flex align-items-center mb-2 mb-lg-0 mx-lg-3 feature-item">
      <i class="fas fa-fw mr-2 fa-check-circle feature-icon"></i>
      <div class="text-muted1">
        <?= l('index.feature.one') ?>
      </div>
    </li>

    <li class="d-flex align-items-center mb-2 mb-lg-0 mx-lg-3 feature-item">
      <i class="fas fa-fw mr-2 fa-check-circle feature-icon"></i>
      <div class="text-muted1">
        <?= l('index.feature.two') ?>
      </div>
    </li>

    <li class="d-flex align-items-center mb-2 mb-lg-0 mx-lg-3 feature-item">
      <i class="fas fa-fw mr-2 fa-check-circle feature-icon"></i>
      <div class="text-muted1">
        <?= l('index.feature.three') ?>
      </div>
    </li>
  </ul>
</div>


        </div>
    </div>
</div>

<div class="my-4">&nbsp;</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg mb-4 position-relative text-truncate" data-aos="fade-up" data-aos-delay="500">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="px-4 d-flex flex-column justify-content-center">
                    <span class="h1 m-0 text-primary">1</span>
                </div>

                <div class="card-body pl-2 text-wrap">
                    <span class="h6"><?= l('index.widgets.one.header') ?></span>
                    <div class="small text-muted"><?= l('index.widgets.one.subheader') ?></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg mb-4 position-relative text-truncate" data-aos="fade-up" data-aos-delay="600">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="px-4 d-flex flex-column justify-content-center">
                    <span class="h1 m-0 text-primary">2</span>
                </div>

                <div class="card-body pl-2 text-wrap">
                    <span class="h6"><?= l('index.widgets.two.header') ?></span>
                    <div class="small text-muted"><?= l('index.widgets.two.subheader') ?></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg mb-4 position-relative text-truncate" data-aos="fade-up" data-aos-delay="700">
            <div class="card d-flex flex-row h-100 overflow-hidden">
                <div class="px-4 d-flex flex-column justify-content-center">
                    <span class="h1 m-0 text-primary">3</span>
                </div>

                <div class="card-body pl-2 text-wrap">
                    <span class="h6"><?= l('index.widgets.three.header') ?></span>
                    <div class="small text-muted"><?= l('index.widgets.three.subheader') ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-5">&nbsp;</div>

<div class="container">
    <div class="row">
        <?php foreach($data->templates as $template_id => $template): ?>
            <div class="col-12 col-lg-4 mb-5 icon-zoom-animation">
                <div class="card d-flex flex-column justify-content-between h-100">
                    <div class="card-body">
                        <div class="mb-3 p-3 rounded w-fit-content" style="background: <?= $data->templates_categories[$template->template_category_id]->background ?>">
                            <i class="<?= $template->icon ?> fa-fw fa-lg" style="color: <?= $data->templates_categories[$template->template_category_id]->color ?>"></i>
                        </div>

                        <div class="mb-2">
                            <span class="h5"><?= $template->settings->translations->{\Altum\Language::$name}->name ?></span>
                        </div>
                        <span class="text-muted"><?= $template->settings->translations->{\Altum\Language::$name}->description ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-- <div class="card1">
    <div class="card-body d-flex justify-content-center">
        <div class="row">
            <div class="col text-center">
            <a href="https://www.crunchbase.com/organization/tiffany-app" target="_blank">
            <img src="<= ASSETS_FULL_URL . 'images/crunch' . $value . '.jpg' ?>" alt="Crunchbase" class="img-fluid" width="60px"/>        
            </a>            
            </div>
            
            <div class="col text-center">
            <a href="https://www.f6s.com/tiffany-app-pvt-ltd" target="_blank">
            <img src="<= ASSETS_FULL_URL . 'images/f6s' . $value . '.png' ?>" alt="F6S" class="img-fluid" width="60px"/>
                </a>
            </div>
            
        </div>
    </div>
</div> -->

<?php if(settings()->aix->images_is_enabled && settings()->aix->images_display_latest_on_index): ?>
    <div class="my-3">&nbsp;</div>

    <div class="container">
        <div class="text-center mb-4">
            <h3 class="h3"><?= l('index.images') ?></h3>
            <p class="text-muted"><?= l('index.images_subheader') ?></p>
        </div>

        <div class="card">
    <div class="card-body">
        <style>
            .grow-on-hover {
    transition: transform 0.2s ease-in-out;
}

.grow-on-hover:hover {
    transform: scale(1.1);
}
        </style>
        <div class="row">
            <?php foreach(range(1, 16) as $key => $value): ?>
                <div class="col-6 col-lg-3 mb-4" data-aos="zoom-in">
                    <div class="image-container" style="width: 100%; height: 0; padding-bottom: 100%; position: relative; overflow: hidden;">
                        <img src="<?= ASSETS_FULL_URL . 'images/image/image' . $value . '.png' ?>" class="img-fluid rounded grow-on-hover" alt="<?= $image->input ?>" data-toggle="tooltip" title="<?= $image->input ?>" loading="lazy" style="position: absolute; width: 100%; height: 100%; object-fit: cover;">
                    </div>  
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
        
    </div>
<?php endif ?>


<?php if(settings()->aix->transcriptions_is_enabled || settings()->aix->syntheses_is_enabled): ?>
    <div class="my-5">&nbsp;</div>

    <div class="container">
        <div class="row">

            <?php if(settings()->aix->transcriptions_is_enabled): ?>
                <div class="col">
                    <div class="card bg-gray-100">
                        <div class="card-body py-5 py-lg-6 d-flex justify-content-center align-items-center">
                            <div class="mr-3 p-3 rounded w-fit-content bg-gray-500 text-gray-200">
                                <i class="fas fa-microphone-alt fa-fw fa-lg"></i>
                            </div>

                            <span class="h2 text-gray-800"><?= l('index.transcriptions') ?></span>
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <?php if(settings()->aix->syntheses_is_enabled): ?>
                <div class="col">
                    <div class="card bg-gray-800">
                        <div class="card-body py-5 py-lg-6 d-flex justify-content-center align-items-center">
                            <div class="mr-3 p-3 rounded w-fit-content bg-gray-500 text-gray-200">
                                <i class="fas fa-voicemail fa-fw fa-lg"></i>
                            </div>

                            <span class="h2 text-gray-100"><?= l('index.syntheses') ?></span>
                        </div>
                    </div>
                </div>
            <?php endif ?>

        </div>
    </div>
<?php endif ?>


<?php if(settings()->aix->chats_is_enabled): ?>
    <div class="my-5">&nbsp;</div>

    <div class="container" id="chat">
        <div class="text-center mb-4">
            <h3 class="h3"><?= l('index.chats') ?></h3>
            <p class="text-muted"><?= l('index.chats.subheader') ?></p>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <?php foreach($data->chat_messages as $chat_message): ?>
                    <div class="<?= $chat_message->role == 'user' ? '' : 'bg-gray-100' ?> p-3 rounded d-flex mb-3" data-aos="fade-up">
                        <div class="mr-3">
                            <img src="<?= $chat_message->role == 'user' ? get_gravatar('') : (settings()->aix->chats_avatar ? \Altum\Uploads::get_full_url('chats_assistants') . settings()->aix->chats_avatar : get_gravatar('')) ?>" class="ai-chat-avatar rounded" loading="lazy" />
                        </div>

                        <div>
                        <div class="font-weight-bold small <?= $chat_message->role == 'user' ? 'text-primary' : 'text-muted' ?>">
    <?= $chat_message->role == 'user' ? ($this->user->name ?? l('global.name')) : 'TiffanyApp Assistant' ?>
</div>

                            <div class="chat-content"><?= nl2br(e($chat_message->content)) ?></div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?= url('chats') ?>" method="get" role="form">
                    <input type="hidden" name="global_token" value="<?= \Altum\Csrf::get('global_token') ?>" />
                    <input type="hidden" name="latest" value="" />

                    <div class="input-group">
                        <input type="text" name="content" class="form-control" placeholder="<?= l('chats.content_placeholder') ?>">
                        <div class="input-group-append">
                            <button type="submit" name="submit" class="btn btn-block btn-primary"><i class="fas fa-fw fa-sm fa-paper-plane mr-1"></i> <?= l('global.submit') ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endif ?>



<?php if(settings()->main->display_index_testimonials): ?>
    <div class="my-5">&nbsp;</div>

    <div class="py-7 bg-primary-100" id="testimonials" style="background-color:#51829b !important">
        <div class="container">
            <div class="text-center">
                <h2><?= l('index.testimonials.header') ?> <i class="fas fa-fw fa-xs fa-check-circle text-primary"></i></h2>
            </div>

            <div class="row mt-8">
                <?php foreach(['one', 'two', 'three', ] as $key => $value): ?>
                    <div class="col-12 col-lg-4 mb-6 mb-lg-0" data-aos="fade-up" data-aos-delay="<?= $key * 100 ?>">

                        <div class="card border-0 zoom-animation">
                            <div class="card-body">
                                <img src="<?= ASSETS_FULL_URL . 'images/index/testimonial-' . $value . '.jpeg' ?>" class="img-fluid index-testimonial-avatar" loading="lazy" />

                                <p class="mt-5">
                                    <span class="text-gray-800 font-weight-bold text-muted h5">“</span>
                                    <span><?= l('index.testimonials.' . $value . '.text') ?></span>
                                    <span class="text-gray-800 font-weight-bold text-muted h5">”</span>
                                </p>

                                <div class="blockquote-footer mt-4">
                                    <span class="font-weight-bold"><?= l('index.testimonials.' . $value . '.name') ?></span>, <span class="text-muted"><?= l('index.testimonials.' . $value . '.attribute') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
<?php endif ?>

<!--] ?php if(settings()->main->display_index_plans): ?>
   

  \
?php endif ?> -->
<div class="my-5">&nbsp;</div>

<div class="container" id="">
    <div class="text-center mb-5">
        <h2><?= l('index.pricing.header') ?></h2>
        <p class="text-muted"><?= l('index.pricing.subheader') ?></p>
    </div>
<div class="containers" id="pricing">
    <style>
        .containers {
  margin: 0 auto;
  padding: 10px 0 0;
  max-width: 960px;
  width: 100%;
}

.panel {
  background-color: #fff;
  border-radius: 10px;
  padding: 15px 25px;
  position: relative;
  width: 100%;
  z-index: 10;
}

.pricing-table {
  background-color: #cad9e7;
  box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
  display: flex;
  flex-direction: column;
}

@media (min-width: 900px) {
  .pricing-table {
    flex-direction: row;
  }
}

.pricing-table * {
  text-align: center;

}

.pricing-plan {
  border-bottom: 1px solid #e1f1ff;
  padding: 25px;
}
.pricing-plan ul {
    list-style: none; /* Remove default bullet points */
        padding: 0;
}

.pricing-plan:last-child {
  border-bottom: none;
}

@media (min-width: 900px) {
  .pricing-plan {
    border-bottom: none;
    border-right: 1px solid #e1f1ff;
    flex-basis: 100%;
    padding: 25px 50px;
  }

  .pricing-plan:last-child {
    border-right: none;
  }
}

.pricing-img {
  margin-bottom: 25px;
  max-width: 100%;
}
.pricing-plan:hover .pricing-img {
    transform: translateY(-5px); /* Adjust the value as needed */
    transition: transform 0.3s ease; /* Add transition effect */
}

.pricing-header {
  color: #4B5563;
  font-weight: 400;
  letter-spacing: 1px;
  font-size: 26px;
}

.pricing-features {
  color:#004AAD ;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 50px 0 25px;
}

.pricing-features-item {
  border-top: 1px solid #e1f1ff;
  font-size: 12px;
  line-height: 1.5;
  padding: 15px 0;
}

.pricing-features-item:last-child {
  border-bottom: 1px solid #e1f1ff;
}

.pricing-price {
  color: #016FF9;
  display: block;
  font-size: 32px;
  font-weight: 700;
}

.pricing-button {
  border: 1px solid #004AAD;
  border-radius: 10px;
  color: #004AAD;
  display: inline-block;
  margin: 25px 0;
  padding: 15px 35px;
  text-decoration: none;
  transition: all 150ms ease-in-out;
}

.pricing-button:hover,
.pricing-button:focus {
  background-color: #e1f1ff;
  text-decoration: none;
}

.pricing-button.is-featured {
  background-color: #48aaff;
  color: #fff;
}

.pricing-button.is-featured:hover,
.pricing-button.is-featured:active {
  background-color: #269aff;
}
    </style>
<div class="panel pricing-table">
      
      <div class="pricing-plan">
        <img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt="" class="pricing-img" width="80px">
        <h2 class="pricing-header">Basic <br>Plan</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">4 AI Documents/month</li>
          <li class="pricing-features-item">400 AI Words/month</li>
          <li class="pricing-features-item">4 AI Images/month</li>
          <li class="pricing-features-item">4 AI Transcriptions/month (up to 1 MB/audio file)</li>
          <li class="pricing-features-item">4 AI Chats/month (50 messages/chat)</li>
          <li class="pricing-features-item">4 AI Syntheses/month (500 characters/synthesis)</li>
          <li class="pricing-features-item">4 Projects</li>
          <li class="pricing-features-item">400 AI Words/month</li>
          <li class="pricing-features-item">Limited API Access</li>
          
        </ul>
        <!-- <span class="pricing-price"></span> -->
        <a href="<?= url('register') ?>" class="pricing-button">Free</a>
      </div>
      
      <div class="pricing-plan">
        <img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img" width="80px">
        <h2 class="pricing-header">Pro<br>Plan</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">12 AI Documents/month</li>
          <li class="pricing-features-item">1,400 AI Words/month</li>
          <li class="pricing-features-item">14 AI Images/month</li>
          <li class="pricing-features-item">14 AI Transcriptions/month (up to 3 MB/audio file)</li>
          <li class="pricing-features-item">14 AI Chats/month (150 messages/chat)</li>
          <li class="pricing-features-item">14 AI Syntheses/month (1,500 characters/synthesis)</li>
          <li class="pricing-features-item">14 Projects</li>
          <li class="pricing-features-item">Full API Access</li>
          <li class="pricing-features-item">Ad-Free Experience</li>
        </ul>
        <!-- <span class="pricing-price">Free</span> -->
        <a href="<?= url('register') ?>" class="pricing-button">Choose this plan</a>
      </div>
      
      <div class="pricing-plan">
        <img src="https://s21.postimg.cc/tpm0cge4n/space-ship.png" alt="" class="pricing-img" width="80px">
        <h2 class="pricing-header">Enterprise<br>Plan</h2>
        <ul class="pricing-features">
          <li class="pricing-features-item">Unlimited AI Documents/month</li>
          <li class="pricing-features-item">Unlimited AI Words/month</li>
          <li class="pricing-features-item">Unlimited AI Images/month</li>
          <li class="pricing-features-item">Unlimited AI Transcriptions/month (up to 5 MB/audio file)</li>
          <li class="pricing-features-item">Unlimited AI Chats/month (Unlimited messages/chat)</li>
          <li class="pricing-features-item">Unlimited AI Syntheses/month (Unlimited characters/synthesis)</li>
          <li class="pricing-features-item">Unlimited Projects</li>
          <li class="pricing-features-item">Priority API Access</li>
          
        </ul>
        <!-- <span class="pricing-price">Free</span> -->
        <a href="<?= url('register') ?>" class="pricing-button">Choose this plan</a>
      </div>
      
    </div>
</div>



<?php if(settings()->main->display_index_faq): ?>
    <div class="my-5">&nbsp;</div>

    <div class="container">
        <div class="text-center mb-5">
            <h2><?= sprintf(l('index.faq.header'), '<span class="text-primary">', '</span>') ?></h2>
        </div>

        <div class="accordion index-faq" id="faq_accordion">
            <?php foreach(['one', 'two', 'three', 'four'] as $key): ?>
                <div class="card">
                    <div class="card-body">
                        <div class="" id="<?= 'faq_accordion_' . $key ?>">
                            <h3 class="mb-0">
                                <button class="btn btn-lg font-weight-bold btn-block d-flex justify-content-between text-gray-800 px-0 icon-zoom-animation" type="button" data-toggle="collapse" data-target="<?= '#faq_accordion_answer_' . $key ?>" aria-expanded="true" aria-controls="<?= 'faq_accordion_answer_' . $key ?>">
                                    <span><?= l('index.faq.' . $key . '.question') ?></span>

                                    <span data-icon>
                                        <i class="fas fa-fw fa-circle-chevron-down"></i>
                                    </span>
                                </button>
                            </h3>
                        </div>

                        <div id="<?= 'faq_accordion_answer_' . $key ?>" class="collapse text-muted mt-2" aria-labelledby="<?= 'faq_accordion_' . $key ?>" data-parent="#faq_accordion">
                            <?= l('index.faq.' . $key . '.answer') ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <?php ob_start() ?>
    <script>
        'use strict';

        $('#faq_accordion').on('show.bs.collapse', event => {
            let svg = event.target.parentElement.querySelector('[data-icon] svg')
            svg.style.transform = 'rotate(180deg)';
            svg.style.color = 'var(--primary)';
        })

        $('#faq_accordion').on('hide.bs.collapse', event => {
            let svg = event.target.parentElement.querySelector('[data-icon] svg')
            svg.style.color = 'var(--primary-800)';
            svg.style.removeProperty('transform');
        })
    </script>
    <?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>
<?php endif ?>


<?php if(settings()->users->register_is_enabled): ?>
    <div class="my-4">&nbsp;</div>

    <div class="container">
        <div class="card">
            <div class="card-body py-5 py-lg-6">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="text-center text-lg-left mb-4 mb-lg-0">
                            <h1 class="h2 text-gray-900"><?= l('index.cta.header') ?></h1>
                            <p class="h6 text-gray-800"><?= l('index.cta.subheader') ?></p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 mt-4 mt-lg-0">
                        <div class="text-center text-lg-right">
                            <?php if(\Altum\Authentication::check()): ?>
                                <a href="<?= url('document-create') ?>" class="btn btn-primary index-button">
                                    <?= l('documents.create') ?> <i class="fas fa-fw fa-arrow-right"></i>
                                </a>
                            <?php else: ?>
                                <a href="<?= url('register') ?>" class="btn btn-primary index-button">
                                    <?= l('index.cta.register') ?> <i class="fas fa-fw fa-arrow-right"></i>
                                </a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php ob_start() ?>
<link rel="stylesheet" href="<?= ASSETS_FULL_URL . 'css/libraries/aos.min.css' ?>">
<?php \Altum\Event::add_content(ob_get_clean(), 'head') ?>

<?php ob_start() ?>
<script src="<?= ASSETS_FULL_URL . 'js/libraries/aos.min.js' ?>"></script>

<script>
    AOS.init({
        delay: 100,
        duration: 600
    });
</script>
<?php \Altum\Event::add_content(ob_get_clean(), 'javascript') ?>

