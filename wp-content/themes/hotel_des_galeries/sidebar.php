<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div id="primary" class="widget-area" role="complementary">
	<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

<form action="<!-- URL ACTION -->" method="post" name="myform" id="myform" target="_blank" style="margin:0px; padding:0px;" onsubmit="invia_form();_gaq.push(['_linkByPost', this]);" >

                 
    <div id="arrival_date" class="blocco">
        <div class="label">Arrivée</div>                
        <div class="tendina">
            <input id="datepicker" type="text" value="" >
        </div>
        </div>
    <div id="nights" class="blocco">
        <div class="label">Nuits</div>                
        <div class="tendina">
            <select class="select" name="notti_1" >
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
            </select>
        </div>
    </div>
    <div id="rooms" class="blocco">
        <div class="label">Chambres</div>                
        <div class="tendina">
            <select class="select" name="tot_camere">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div id="adults" class="blocco">
        <div class="label">Adultes</div>                
        <div class="tendina">
            <select class="select" name="tot_adulti">
                <option value="1">1</option>
                <option value="2" selected="selected">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div id="children" class="blocco">
        <div class="label">Enfants</div>                
        <div class="tendina">
            <select class="select" name="tot_bambini" >
                <option value="0" selected >0</option>      
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
    </div>
    <div id="box_customer_code">
        <div class="label">Code clients</div>
        <div class="box_select">
            <input type="text" name="codice_cli" size="20">
        </div>
    </div>
    <div id="box_special_code">
        <div class="label">Code spécial</div>
        <div class="box_select">
            <input size="20" name="sconto" value="" type="password">
        </div>
    </div>

    <div id="search" class="blocco">
    	<button>Réserver</button>
	</div>

    <!--<div id="cancella"><a href="?id_albergo=<! dc=&lingua_int=&headvar=ok&id_stile=&graph_be=&cancel=pren">Cancel/modify reservation</a></div>-->
</form>
</ul>


<ul class="social">
	<li><a class="icon_fb" href=""></a></li>
	<li><a  class="icon_insta" href=""></a></li>
</ul>

<script type="text/javascript">

$(document).ready( function() {
    var now = new Date();
    var today = now.getDate() + '/' + (now.getMonth() + 1) + '/' + now.getFullYear();
    $('#datepicker').val(today);
});

</script>
<script type="text/javascript">

$(function() {
$( "#datepicker" ).datepicker({ minDate: "0", showOtherMonths: true, selectOtherMonths: true, altField: "#gg",	altFormat: "dd" });
});
function invia_form()
{
var data = 	$( "#datepicker" ).attr('value');
//alert(data);

data = data.split('/');

$('#gg').attr({value:data[0]});
$('#mm').attr({value:data[1]});
$('#aa').attr({value:data[2]});

//alert($('#gg').attr('value')+' - '+$('#mm').attr('value')+' - '+$('#aa').attr('value'));
//$('#myform').submit();
}
</script>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
