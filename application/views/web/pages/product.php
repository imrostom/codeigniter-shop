

<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Shop Page</h3>
            </div>
            <div class="clear"></div>
        </div>

        <?php
        $arr_chunk_product = array_chunk($get_all_product, 4);

        foreach ($arr_chunk_product as $chunk_products) {
            ?>
            <div class="section group">
                <?php foreach ($chunk_products as $single_products) { ?>
                    <div class="grid_1_of_4 images_1_of_4">
                        <a href="<?php echo base_url('single/'.$single_products->product_id);?>"><img style="width:250px;height:250px" src="<?php echo base_url('uploads/'.$single_products->product_image)?>" alt="" /></a>
                        <h2><?php echo $single_products->product_title ?></h2>
                        <p><?php echo word_limiter($single_products->product_short_description, 10) ?></p>
                        <p><span class="price"><?php echo $this->cart->format_number($single_products->product_price) ?> Tk</span></p>
                        <div class="button"><span><a href="<?php echo base_url('single/'.$single_products->product_id);?>" class="details">Details</a></span></div>
                    </div>
                    <?php
                }
                ?>

            </div>
            <?php
        }
        ?>
        <div class="content_pagi">
            <div class="pagination">
                <?=$this->pagination->create_links();?>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>
<style>
    .content_pagi{padding:20px;border: 1px solid #EBE8E8;border-radius: 3px;}
    .pagination{}
    .pagination ul{}
    .pagination ul li{float: left}
    .pagination ul li a{color: #000;padding: 7px 12px;border: 1px solid #ddd;font-size: 18px;}
    .pagination ul li a:hover{background:#ddd;}
    .pagiactive a{background:#ddd;}

</style>