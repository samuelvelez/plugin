<?php
/*
 * Plugin Name:       Sign Up Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Sign Up with security question.
 * Version:           1.0.0
 * Author:            Samuel Velez
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       sign-up-plugin
 * Domain Path:       /languages
 */

 /*
function wporg_options_page_html() {
    ?>
    <div class="wrap">
      <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <form action="options.php" method="post">
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'wporg_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'wporg' );
        // output save settings button
        include('form.php');
        submit_button( __( 'Save Settings', 'textdomain' ) );
        ?>
      </form>
    </div>
    <?php
}



*/

class Informacion {

    public
	static function showAlertMessage($message, $delete = false) {
		echo "<br/><div class=\"alert " . ($delete ? "alert-danger" : "alert-success") . " alert-dismissible\" role=\"alert\">
  			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" onclick=\"jQuery(this).parent().css('display','none')\"><span aria-hidden=\"true\">&times;</span></button>
  			<strong>" . ($delete ? "Alerta" : "Éxito") . "!</strong> $message
		</div>";
	}
}
function wporg_options_page() {
    add_menu_page(
        'User Create',
        'User Create',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}
add_action( 'admin_menu', 'wporg_options_page' );
function cotizador() {
	global $wpdb;
	
	if (isset($_POST["action"])) {

		$recaptcha = $_POST["g-recaptcha-response"];
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array(
			'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
			'secret' => 'AIzaSyDHGvAL0Hmffs8wz6-aMK2weMTL7nAPNfU',
			'response' => $recaptcha
		);
		$options = array(
			'http' => array (
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);
		$context  = stream_context_create($options);
		$verify = file_get_contents($url, false, $context);
		$captcha_success = json_decode($verify);
		if(true){//$captcha_success->success) {
           switch ($_POST["action"]) {
				case "SEND-EMAIL":
					if (
						isset($_POST["username"]) &&
						isset($_POST["password"]) &&
						isset($_POST["question"]) &&
						isset($_POST["answer"])
					) {
						$html_cliente = file_get_contents(get_site_url() . "/wp-content/plugins/signUp/form.html");
						$html_cliente = str_replace("#username#", $_POST["username"], $html_cliente);
						$html_cliente = str_replace("#password#", $_POST["password"], $html_cliente);
						$html_cliente = str_replace("#question#", $_POST["question"], $html_cliente);
						$html_cliente = str_replace("#answer#", $_POST["answer"], $html_cliente);

						$to = $_POST["username"];
						$subject = 'Usuario Creado';
						$headers = array('Content-Type: text/html; charset=UTF-8', 'From: Plugin <noreply@mysite.com');

						wp_mail($to, $subject, $html_cliente, $headers);

						$cotizado = true;

					}
				
				break;
			}

		} 
		else {
			Informacion::showAlertMessage("Validacion de ReCaptcha no Válida.", true);
		}
	}


	wp_enqueue_style('chosen-style', get_site_url() . "/wp-content/plugins/cotizador-latina-seguros/assets/libs/chosen/chosen.css");
	wp_enqueue_script('chosen-script', "https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.jquery.min.js");
	wp_enqueue_script('chosen-proto-script', "https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.proto.min.js");
	include('form.php');


}

add_shortcode('cotizador-cliente', 'cotizador');
?>