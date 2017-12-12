<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
        <style type="text/css">
            .header_area{padding:30px 0px;background:#4842f4;color:#fff}
            .footer_area{padding:10px 0px;background:#4842f4;color:#fff}
            .content_area{padding:30px 0px}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 align="center">Money Receipt</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h2>Customer Info(00<?php echo $customer_info->customer_id; ?>)</h2>
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <td>Customer Name : </td>
                                    <td><?php echo $customer_info->customer_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Customer Adress : </td>
                                    <td><?php echo $customer_info->customer_address; ?></td>
                                </tr>
                                <tr>
                                    <td>Customer Mobile : </td>
                                    <td><?php echo $customer_info->customer_phone; ?></td>
                                </tr>
                                <tr>
                                    <td>Customer Email : </td>
                                    <td><?php echo $customer_info->customer_email; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-5">
                            <h2>Customer Info(00<?php echo $shipping_info->shipping_id; ?>)</h2>
                            <table class="table table-hover table-bordered">
                                <tr>
                                    <td>Shpping Name : </td>
                                    <td><?php echo $shipping_info->shipping_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Shipping Adress : </td>
                                    <td><?php echo $shipping_info->shipping_address; ?></td>
                                </tr>
                                <tr>
                                    <td>Shipping Mobile : </td>
                                    <td><?php echo $shipping_info->shipping_phone; ?></td>
                                </tr>
                                <tr>
                                    <td>Shipping Email : </td>
                                    <td><?php echo $shipping_info->shipping_email; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered">
                                <thead class="table-inverse">
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Product Name</th>
                                        <th>Product Image</th>
                                        <th>Product Price</th>
                                        <th>Product Qty</th>
                                        <th>Product Subtotal</th>
                                    </tr>
                                </thead>   
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($order_details_info as $single_order_details) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $single_order_details->product_name ?></td>
                                            <td><img src="<?php echo base_url('uploads/' . $single_order_details->product_image); ?>" style="width:200px;height:100px"/></td>
                                            <td><?php echo $single_order_details->product_price ?></td>
                                            <td><?php echo $single_order_details->product_sales_quantity ?></td>
                                            <td><?php echo $single_order_details->product_price * $single_order_details->product_sales_quantity ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot class="table-inverse">
                                <td>Total Amount</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>= <?php echo $order_info->order_total ?> Tk</td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p align="center">Copyright By Rostom Ali</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
