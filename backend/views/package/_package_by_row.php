<?php
/**
 * Created by PhpStorm.
 * User: Fahmy
 * Date: 9/14/15
 * Time: 2:05 PM
 */


use common\models\Lookup;
?>
<?php foreach($packages as $package) :?>
    <div class="col-md-3 col-sm-6">
        <div class="pricing hover-effect">
            <div class="pricing-head">
                <h4 style="background-color: #fff;font-size: 36px"><?=$package->name?></h4>
            </div>
            <ul class="pricing-content list-unstyled" style="background-color:#17607f;">
                <?php foreach($package->offers as $offer) :?>
                    <li><i class="fa <?= Lookup::item('Icon-Offer',$offer->frontIcon)?>"></i> <?=Lookup::item('Item-Offer',$offer->item)?>
                        <?php if($offer->enable == 1):?>
                            <span><i class="fa fa-check"></i></span>
                        <?php else:?>
                            <span></span>
                        <?php endif;?>
                    </li>
                <?php endforeach;?>
            </ul>
            <div class="pricing-footer" style="background-color:#17607f;">
                <h4><i>$</i><?=$package->price?><i>.00</i> <span>Per Month</span></h4>
                <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cloud Storage magna psum condimentum...</p>-->
                <a href="#" class="btn-u btn-brd btn-u-default btn-u-xs" onclick="AddToCart('Package-<?=$package->id?>')"><i class="fa fa-shopping-cart"></i> Purchase Now</a>
            </div>
        </div>
    </div>
<?php endforeach;?>
<br>
<div class="row">
    <div class="col-lg-12">
        <div style="text-align:center;">
            <button class="btn-u rounded-3x btn-u-blue" type="button" id="showLess" onclick="removePackages()" style="background-color: #2980b9 !important;color:#fff">Close</button>
        </div>

    </div>

</div>
