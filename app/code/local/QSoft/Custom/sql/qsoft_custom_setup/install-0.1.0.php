<?php
/**
 * Created by PhpStorm.
 * User: doanns
 * Date: 13/04/2016
 * Time: 2:42 PM
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();
$content = <<<LOL
<!-- Slider -->
<section class="qs-slider-wrapper">{{revslider alias="home"}}</section>
<!-- Discover -->
<section class="qs-discover-wrapper">
    <div class="container">
        <div class="qs-logo-small">
            <img src="{{media url="wysiwyg/logo-small.png"}}" alt="" />
        </div>

        <div class="qs-title-discover">
            <span class="qs-small-title">Discover</span>
            <span class="qs-lager-title">Escape Velocity</span>
        </div>

        <div class="qs-grid-discover">
            <div class="row">
                <div class="col-md-4">
                    <div class="qs-col-discover">
                        <a href="#">
                            <div class="qs-img-discover">
                                <img src="{{media url="wysiwyg/tri-shirt.jpg"}}" alt="" />
                            </div>
                            <div class="qs-desc-col">
                                <span class="qs-text-col">Tri Shirt</span>
                                <span class="qs-content-col">The first performance apparel & equipment on the planet. By athletes for athletes. No middleman. Amzing customer service.</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="qs-col-discover">
                        <a href="#">
                            <div class="qs-img-discover">
                                <img src="{{media url="wysiwyg/tri-suit.jpg"}}" alt="" />
                            </div>
                            <div class="qs-desc-col">
                                <span class="qs-text-col">Tri Suit</span>
                                <span class="qs-content-col">The first performance apparel & equipment on the planet. By athletes for athletes. No middleman. Amzing customer service.</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="qs-col-discover">
                        <a href="#">
                            <div class="qs-img-discover">
                                <img src="{{media url="wysiwyg/tri-short.jpg"}}" alt="" />
                            </div>
                            <div class="qs-desc-col">
                                <span class="qs-text-col">Tri Short</span>
                                <span class="qs-content-col">The first performance apparel & equipment on the planet. By athletes for athletes. No middleman. Amzing customer service.</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="qs-col-discover">
                        <a href="#">
                            <div class="qs-img-discover">
                                <img src="{{media url="wysiwyg/measurement.jpg"}}" alt="" />
                            </div>
                            <div class="qs-desc-col">
                                <span class="qs-text-col">Add You Measurement</span>
                                <span class="qs-content-col">The first performance apparel & equipment on the planet. By athletes for athletes. No middleman. Amzing customer service.</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="qs-col-discover">
                        <a href="#">
                            <div class="qs-img-discover">
                                <img src="{{media url="wysiwyg/body-scan.jpg"}}" alt="" />
                            </div>
                            <div class="qs-desc-col">
                                <span class="qs-text-col">Body Scan</span>
                                <span class="qs-content-col">The first performance apparel & equipment on the planet. By athletes for athletes. No middleman. Amzing customer service.</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="qs-col-discover">
                        <a href="#">
                            <div class="qs-img-discover">
                                <img src="{{media url="wysiwyg/design.jpg"}}" alt="" />
                            </div>
                            <div class="qs-desc-col">
                                <span class="qs-text-col">Design Your Own</span>
                                <span class="qs-content-col">The first performance apparel & equipment on the planet. By athletes for athletes. No middleman. Amzing customer service.</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="qs-advertisement">
            <div class="qs-img-advertisement">
                <img src="{{media url="wysiwyg/schedule.jpg"}}" alt="" />
            </div>
            <div class="qs-desc-advertisement">
                <div class="qs-text-advertisement">
                    <p>The first performance apparel & equipment on the planet. <br />By athletes for athletes. No middleman. Amzing customer service.</p>
                    <a href="#">Schedule For Body Scan</a>
                </div>
            </div>
        </div>

    </div>
</section>
LOL;

$data = array(
    'title' => 'Homepage',
    'identifier' => 'home',
    'content' => $content,
    'root_template' => 'one_column',
    'is_active' => 1,
    'stores' => array(0)
);

$model = Mage::getModel('cms/page')->load('home');
if($model->getId()){
    $model->setContent($content)
        ->save();
}else{
    Mage::getModel('cms/page')->setData($data)->save();
}

$installer->endSetup();