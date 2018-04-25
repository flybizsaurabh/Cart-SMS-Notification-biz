<?php global $biz_sms_settings, $biz_sms; ?>

<div class="wrap woocommerce">
  <h2 class="alert alert-success" id="setting_heading">
    <?php _e( 'Notification Settings.', 'woocommerce-biz-sms-notifications' ); ?>
  </h2>
<?php $notification = '<strong> Note: </strong>It Is  require WooCommerce above 2.1 Versions.'; ?>  
  <?php 
  ?>

  <!-- Right side banner info if want then include here -->
<div class="main-form">
  <form method="post" action="options.php">
    <?php settings_fields( 'biz_sms_settings_group' ); ?>

    <table class="form-table" id="tablec">
      <tr valign="top">
          <div class="alert alert-danger" id="lengthp">
         <?php echo $notification ?>
          </div>
        <th scope="row" class="titledesc"> 
          <label for="biz_sms_settings[servicio]">
            <?php _e( 'SMS Gateway:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Select SMS Getway', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><select class="wc-enhanced-select servicio" id="biz_sms_settings[servicio]" name="biz_sms_settings[servicio]" tabindex="<?php echo $tab++; ?>"><?php biz_sms_providers_setting( $listado_de_proveedores ); ?></select></td>
      </tr>
      <?php biz_sms_provider_cmp( $listado_de_proveedores, $campos_de_proveedores, $opciones_de_proveedores ); ?>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[telefono]">
            <?php _e( 'Your Mobile No:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'The mobile number registered in your SMS gateway account and where you receive the SMS messages.' ); ?>"></span> </th>
        <td class="forminp forminp-number"><input type="text" class="txt_size" id="biz_sms_settings[telefono]" name="biz_sms_settings[telefono]" size="50" value="<?php echo ( isset( $biz_sms_settings['telefono'] ) ? $biz_sms_settings['telefono'] : '' ); ?>" tabindex="<?php echo $tab++; ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[notificacion]">
            <?php _e( 'New Order Notification:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( "Check if you want to receive a SMS message when there's a new order", 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><input id="biz_sms_settings[notificacion]" name="biz_sms_settings[notificacion]" type="checkbox" value="1" <?php echo ( isset( $biz_sms_settings['notificacion'] ) && $biz_sms_settings['notificacion'] == "1" ? 'checked="checked"' : '' ); ?> tabindex="<?php echo $tab++; ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[internacional]">
            <?php _e( 'Send International SMS', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Check if you want to send international SMS messages', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><input id="biz_sms_settings[internacional]" name="biz_sms_settings[internacional]" type="checkbox" value="1" <?php echo ( isset( $biz_sms_settings['internacional'] ) && $biz_sms_settings['internacional'] == "1" ? 'checked="checked"' : '' ); ?> tabindex="<?php echo $tab++; ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[envio]">
            <?php _e( 'Send SMS', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Check if you want to send SMS messages to shipping mobile numbers, only if it is different from billing mobile number', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><input id="biz_sms_settings[envio]" name="biz_sms_settings[envio]" type="checkbox" value="1" <?php echo ( isset( $biz_sms_settings['envio'] ) && $biz_sms_settings['envio'] == "1" ? 'checked="checked"' : '' ); ?> tabindex="<?php echo $tab++; ?>" class="envio" /></td>
      </tr>
      <tr valign="top" class="campo_envio">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[campo_envio]">
            <?php _e( 'Shipping mobile field:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Select the shipping mobile field', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><select id="biz_sms_settings[campo_envio]" name="biz_sms_settings[campo_envio]" class="wc-enhanced-select" tabindex="<?php echo $tab++; ?>"><?php biz_sms_country_st(); ?></select></td>
      </tr>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[productos]">
            <?php _e( 'order_product variable full details:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Check if you want to send the SMS messages with full order product information', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><input id="biz_sms_settings[productos]" name="biz_sms_settings[productos]" type="checkbox" value="1" <?php echo ( isset( $biz_sms_settings['productos'] ) && $biz_sms_settings['productos'] == "1" ? 'checked="checked"' : '' ); ?> tabindex="<?php echo $tab++; ?>" /></td>
      </tr>
      <?php if ( class_exists( 'WC_SA' ) || function_exists( 'AppZab_woo_advance_order_status_init' ) || class_exists( 'WC_Order_Status_Manager' ) || isset( $GLOBALS['advorder_lite_orderstatus'] ) ) :  ?>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[estados_personalizados]">
            <?php _e( 'Custom Order Statuses & Actions:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Select your own statuses.', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><select multiple="multiple" class="wc-enhanced-select multiselect estados_personalizados" id="biz_sms_settings[estados_personalizados]" name="biz_sms_settings[estados_personalizados][]" tabindex="<?php echo $tab++; ?>"><?php biz_sms_list_no( $listado_de_estados ); ?></select></td>
      </tr>
      <?php foreach ( $listado_de_estados as $nombre_de_estado => $estado_personalizado ) : ?>
      <tr valign="top" class="<?php echo $estado_personalizado; ?>">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[<?php echo $estado_personalizado; ?>]"> <?php echo sprintf( __( '%s state custom message:', 'woocommerce-biz-sms-notifications' ), $nombre_de_estado ); ?> </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'You can customize your message. Remember that you can use this variables: %id%, %order_key%, %billing_first_name%, %billing_last_name%, %billing_company%, %billing_address_1%, %billing_address_2%, %billing_city%, %billing_postcode%, %billing_country%, %billing_state%, %billing_email%, %billing_phone%, %shipping_first_name%, %shipping_last_name%, %shipping_company%, %shipping_address_1%, %shipping_address_2%, %shipping_city%, %shipping_postcode%, %shipping_country%, %shipping_state%, %shipping_method%, %shipping_method_title%, %payment_method%, %payment_method_title%, %order_discount%, %cart_discount%, %order_tax%, %order_shipping%, %order_shipping_tax%, %order_total%, %status%, %prices_include_tax%, %tax_display_cart%, %display_totals_ex_tax%, %display_cart_ex_tax%, %order_date%, %modified_date%, %customer_message%, %customer_note%, %post_status%, %shop_name%, %order_product% and %note%.', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><textarea id="biz_sms_settings[<?php echo $estado_personalizado; ?>]" name="biz_sms_settings[<?php echo $estado_personalizado; ?>]" cols="50" rows="5" tabindex="<?php echo $tab++; ?>"><?php echo stripcslashes( isset( $biz_sms_settings[$estado_personalizado] ) ? $biz_sms_settings[$estado_personalizado] : "" ); ?></textarea></td>
      </tr>
      <?php endforeach; ?>
      <?php endif; ?>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[variables]">
            <?php _e( 'Custom variables:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'You can add your own variables. Each variable must be entered onto a new line without percentage character ( % ). Example: <code>_custom_variable_name</code><br /><code>_another_variable_name</code>.', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><textarea id="biz_sms_settings[variables]" name="biz_sms_settings[variables]" cols="50" rows="5" tabindex="<?php echo $tab++; ?>"><?php echo stripcslashes( isset( $biz_sms_settings['variables'] ) ? $biz_sms_settings['variables'] : '' ); ?></textarea></td>
      </tr>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[productos]">
            <?php _e( 'Send only this messages:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Select what messages do you want to send', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number">
        <select multiple="multiple" class="wc-enhanced-select multiselect mensajes" id="biz_sms_settings[mensajes]" name="biz_sms_settings[mensajes][]" tabindex="<?php echo $tab++; ?>"><?php biz_sms_msg_list_op( $listado_de_mensajes ); ?></select>
      </tr>
      <tr valign="top" class="mensaje_pedido">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[mensaje_pedido]">
            <?php _e( 'Owner custom message', 'woocommerce-biz-sms-notifications' ); ?>:
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'You can customize your message. Remember that you can use this variables: %id%, %order_key%, %billing_first_name%, %billing_last_name%, %billing_company%, %billing_address_1%, %billing_address_2%, %billing_city%, %billing_postcode%, %billing_country%, %billing_state%, %billing_email%, %billing_phone%, %shipping_first_name%, %shipping_last_name%, %shipping_company%, %shipping_address_1%, %shipping_address_2%, %shipping_city%, %shipping_postcode%, %shipping_country%, %shipping_state%, %shipping_method%, %shipping_method_title%, %payment_method%, %payment_method_title%, %order_discount%, %cart_discount%, %order_tax%, %order_shipping%, %order_shipping_tax%, %order_total%, %status%, %prices_include_tax%, %tax_display_cart%, %display_totals_ex_tax%, %display_cart_ex_tax%, %order_date%, %modified_date%, %customer_message%, %customer_note%, %post_status%, %shop_name%, %order_product% and %note%.', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><textarea id="biz_sms_settings[mensaje_pedido]" name="biz_sms_settings[mensaje_pedido]" cols="50" rows="5" tabindex="<?php echo $tab++; ?>"><?php echo stripcslashes( !empty( $mensaje_pedido ) ? $mensaje_pedido : sprintf( __( "Order No. %s received on ", 'woocommerce-biz-sms-notifications' ), "%id%" ) . "%shop_name%" . "." ); ?></textarea></td>
      </tr>
      <tr valign="top" class="mensaje_recibido">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[mensaje_recibido]">
            <?php _e( 'Order on-hold custom message', 'woocommerce-biz-sms-notifications' ); ?>:
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'You can customize your message. Remember that you can use this variables: %id%, %order_key%, %billing_first_name%, %billing_last_name%, %billing_company%, %billing_address_1%, %billing_address_2%, %billing_city%, %billing_postcode%, %billing_country%, %billing_state%, %billing_email%, %billing_phone%, %shipping_first_name%, %shipping_last_name%, %shipping_company%, %shipping_address_1%, %shipping_address_2%, %shipping_city%, %shipping_postcode%, %shipping_country%, %shipping_state%, %shipping_method%, %shipping_method_title%, %payment_method%, %payment_method_title%, %order_discount%, %cart_discount%, %order_tax%, %order_shipping%, %order_shipping_tax%, %order_total%, %status%, %prices_include_tax%, %tax_display_cart%, %display_totals_ex_tax%, %display_cart_ex_tax%, %order_date%, %modified_date%, %customer_message%, %customer_note%, %post_status%, %shop_name%, %order_product% and %note%.', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><textarea id="biz_sms_settings[mensaje_recibido]" name="biz_sms_settings[mensaje_recibido]" cols="50" rows="5" tabindex="<?php echo $tab++; ?>"><?php echo stripcslashes( !empty( $mensaje_recibido ) ? $mensaje_recibido : sprintf( __( 'Your order No. %s is received on %s. Thank you for shopping with us!', 'woocommerce-biz-sms-notifications' ), "%id%", "%shop_name%" ) ); ?></textarea></td>
      </tr>
      <tr valign="top" class="mensaje_recibido">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[temporizador]">
            <?php _e( 'Order on-hold timer', 'woocommerce-biz-sms-notifications' ); ?>:
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'You can timer this message every X hours. Leave blank to disable.', 'woocommerce-biz-sms-notifications' ); ?>" /> </th>
        <td class="forminp forminp-number"><input type="text" id="biz_sms_settings[temporizador]" name="biz_sms_settings[temporizador]" size="50" value="<?php echo ( isset( $biz_sms_settings['temporizador'] ) ? $biz_sms_settings['temporizador'] : '' ); ?>" tabindex="<?php echo $tab++; ?>" /></td>
      </tr>
      <tr valign="top" class="mensaje_procesando">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[mensaje_procesando]">
            <?php _e( 'Order processing custom message', 'woocommerce-biz-sms-notifications' ); ?>:
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'You can customize your message. Remember that you can use this variables: %id%, %order_key%, %billing_first_name%, %billing_last_name%, %billing_company%, %billing_address_1%, %billing_address_2%, %billing_city%, %billing_postcode%, %billing_country%, %billing_state%, %billing_email%, %billing_phone%, %shipping_first_name%, %shipping_last_name%, %shipping_company%, %shipping_address_1%, %shipping_address_2%, %shipping_city%, %shipping_postcode%, %shipping_country%, %shipping_state%, %shipping_method%, %shipping_method_title%, %payment_method%, %payment_method_title%, %order_discount%, %cart_discount%, %order_tax%, %order_shipping%, %order_shipping_tax%, %order_total%, %status%, %prices_include_tax%, %tax_display_cart%, %display_totals_ex_tax%, %display_cart_ex_tax%, %order_date%, %modified_date%, %customer_message%, %customer_note%, %post_status%, %shop_name%, %order_product% and %note%.', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><textarea id="biz_sms_settings[mensaje_procesando]" name="biz_sms_settings[mensaje_procesando]" cols="50" rows="5" tabindex="<?php echo $tab++; ?>"><?php echo stripcslashes( !empty( $mensaje_procesando ) ? $mensaje_procesando : sprintf( __( 'Thank you for shopping with us! Your order No. %s is now: ', 'woocommerce-biz-sms-notifications' ), "%id%" ) . __( 'Processing', 'woocommerce-biz-sms-notifications' ) . "." ); ?></textarea></td>
      </tr>
      <tr valign="top" class="mensaje_completado">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[mensaje_completado]">
            <?php _e( 'Order completed custom message', 'woocommerce-biz-sms-notifications' ); ?>:
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'You can customize your message. Remember that you can use this variables: %id%, %order_key%, %billing_first_name%, %billing_last_name%, %billing_company%, %billing_address_1%, %billing_address_2%, %billing_city%, %billing_postcode%, %billing_country%, %billing_state%, %billing_email%, %billing_phone%, %shipping_first_name%, %shipping_last_name%, %shipping_company%, %shipping_address_1%, %shipping_address_2%, %shipping_city%, %shipping_postcode%, %shipping_country%, %shipping_state%, %shipping_method%, %shipping_method_title%, %payment_method%, %payment_method_title%, %order_discount%, %cart_discount%, %order_tax%, %order_shipping%, %order_shipping_tax%, %order_total%, %status%, %prices_include_tax%, %tax_display_cart%, %display_totals_ex_tax%, %display_cart_ex_tax%, %order_date%, %modified_date%, %customer_message%, %customer_note%, %post_status%, %shop_name%, %order_product% and %note%.', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><textarea id="biz_sms_settings[mensaje_completado]" name="biz_sms_settings[mensaje_completado]" cols="50" rows="5" tabindex="<?php echo $tab++; ?>"><?php echo stripcslashes( !empty( $mensaje_completado ) ? $mensaje_completado : sprintf( __( 'Thank you for shopping with us! Your order No. %s is now: ', 'woocommerce-biz-sms-notifications' ), "%id%" ) . __( 'Completed', 'woocommerce-biz-sms-notifications' ) . "." ); ?></textarea></td>
      </tr>
      <tr valign="top" class="mensaje_nota">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[mensaje_nota]">
            <?php _e( 'Notes custom message', 'woocommerce-biz-sms-notifications' ); ?>:
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'You can customize your message. Remember that you can use this variables: %id%, %order_key%, %billing_first_name%, %billing_last_name%, %billing_company%, %billing_address_1%, %billing_address_2%, %billing_city%, %billing_postcode%, %billing_country%, %billing_state%, %billing_email%, %billing_phone%, %shipping_first_name%, %shipping_last_name%, %shipping_company%, %shipping_address_1%, %shipping_address_2%, %shipping_city%, %shipping_postcode%, %shipping_country%, %shipping_state%, %shipping_method%, %shipping_method_title%, %payment_method%, %payment_method_title%, %order_discount%, %cart_discount%, %order_tax%, %order_shipping%, %order_shipping_tax%, %order_total%, %status%, %prices_include_tax%, %tax_display_cart%, %display_totals_ex_tax%, %display_cart_ex_tax%, %order_date%, %modified_date%, %customer_message%, %customer_note%, %post_status%, %shop_name%, %order_product% and %note%.', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><textarea id="biz_sms_settings[mensaje_nota]" name="biz_sms_settings[mensaje_nota]" cols="50" rows="5" tabindex="<?php echo $tab++; ?>"><?php echo stripcslashes( !empty( $mensaje_nota ) ? $mensaje_nota : sprintf( __( 'A note has just been added to your order No. %s: ', 'woocommerce-biz-sms-notifications' ), "%id%" ) . "%note%" ); ?></textarea></td>
      </tr>
      <tr valign="top">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[debug]">
            <?php _e( 'Send debug information?:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Check if you want to receive debug information from your SMS gateway', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><input id="biz_sms_settings[debug]" name="biz_sms_settings[debug]" type="checkbox" class="debug" value="1" <?php echo ( isset( $biz_sms_settings['debug'] ) && $biz_sms_settings['debug'] == "1" ? 'checked="checked"' : '' ); ?> tabindex="<?php echo $tab++; ?>" /></td>
      </tr>
      <tr valign="top" class="campo_debug">
        <th scope="row" class="titledesc"> <label for="biz_sms_settings[campo_debug]">
            <?php _e( 'email address:', 'woocommerce-biz-sms-notifications' ); ?>
          </label>
          <span class="woocommerce-help-tip" data-tip="<?php _e( 'Add an email address where you want to receive the debug information', 'woocommerce-biz-sms-notifications' ); ?>"></span> </th>
        <td class="forminp forminp-number"><input type="text" id="biz_sms_settings[campo_debug]" name="biz_sms_settings[campo_debug]" size="50" value="<?php echo ( isset( $biz_sms_settings['campo_debug'] ) ? $biz_sms_settings['campo_debug'] : '' ); ?>" tabindex="<?php echo $tab++; ?>" /></td>
      </tr>
    </table>
    <p class="submit">
      <input class="btn btn-primary btn-lg" type="submit" value="<?php _e( 'SAVE SETTING', 'woocommerce-biz-sms-notifications' ); ?>"  name="submit" id="submit" tabindex="<?php echo $tab++; ?>" />
    </p>
  </form>
  </div>
</div>
<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
	//JQuery For SMS Service Changes
	$( '.servicio' ).on( 'change', function () { 
		control( $( this ).val() ); 
	} );
	var control = function( capa ) {
		if ( capa == '' ) {
			capa = $( '.servicio option:selected' ).val();
		}
		var proveedores= new Array();
		<?php 
		foreach( $listado_de_proveedores as $indice => $valor ) {
			echo "proveedores['$indice'] = '$valor';" . PHP_EOL;
		}
		?>
		
		for ( var valor in proveedores ) {
    		if ( valor == capa ) {
				$( '.' + capa ).show();
			} else {
				$( '.' + valor ).hide();
			}
		}
	};
	control( $( '.servicio' ).val() );


	$( '.mensajes' ).on( 'change', function () { 
		control_mensajes( $( this ).val() ); 
	} );
	var control_mensajes = function( capa ) {
		if ( capa == '' ) {
			capa = $( '.mensajes option:selected' ).val();
		}

		var mensajes= new Array();
		<?php 
		foreach( $listado_de_mensajes as $indice => $valor ) {
			echo "mensajes['$indice'] = '$valor';" . PHP_EOL; 
		}
		?>

		for ( var valor in mensajes ) {
			$( '.' + valor ).hide();
			for ( var valor_capa in capa ) {
				if ( valor == capa[valor_capa] || capa[valor_capa] == 'todos' ) {
					$( '.' + valor ).show();
				}
			}
		}
	};
	
	$( '.mensajes' ).each( function( i, selected ) { 
	  control_mensajes( $( selected ).val() );
	} );
	
	if ( typeof chosen !== 'undefined' && $.isFunction( chosen ) ) {
		jQuery( "select.chosen_select" ).chosen();
	}
	
	
	$( '.campo_envio' ).hide();
	$( '.envio' ).on( 'change', function () { 
		control_envio( '.envio' ); 
	} );
	var control_envio = function( capa ) {
		if ( $( capa ).is(':checked') ){
			$( '.campo_envio' ).show();
		} else {
			$( '.campo_envio' ).hide();
		}
	};
	control_envio( '.envio' ); 
	
	
	$( '.campo_debug' ).hide();
	$( '.debug' ).on( 'change', function () { 
		control_debug( '.debug' ); 
	} );
	var control_debug = function( capa ) {
		if ( $( capa ).is(':checked') ){
			$( '.campo_debug' ).show();
		} else {
			$( '.campo_debug' ).hide();
		}
	};
	control_debug( '.debug' ); 
	
<?php if ( !empty( $listado_de_estados ) ) :  ?>
	$( '.estados_personalizados' ).on( 'change', function () { 
		control_personalizados( $( this ).val() ); 
	} );
	var control_personalizados = function( capa ) {
		var estados= new Array();
		<?php 
		foreach( $listado_de_estados as $valor ) {
			echo "estados['$valor'] = '$valor';" . PHP_EOL; 
		}
		?>

		for ( var valor in estados ) {
			$( '.' + valor ).hide();
			for ( var valor_capa in capa ) {
				if ( valor == capa[valor_capa] ) {
					$( '.' + valor ).show();
				}
			}
		}
	};

	$( '.estados_personalizados' ).each( function( i, selected ) { 
	  control_personalizados( $( selected ).val() );
	} );
<?php endif; ?>	
} );
</script> 
