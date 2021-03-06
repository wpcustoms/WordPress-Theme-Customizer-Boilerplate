<?php


/**
 * Theme Customizer sanitization callback function
 */
function thsp_sanitize_cb( $input ) {
	
	return wp_kses_post( $input );
	
}


/**
 * Creates Customizer control for textarea field
 *
 * @link	http://ottopress.com/2012/making-a-custom-control-for-the-theme-customizer/
 * @since	TS_Theme_Settings 1.0
 */
class Customizer_Textarea_Control extends WP_Customize_Control {
	public $type = 'textarea';
	
	public function render_content() {
	?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
		</label>
	<?php
	}
}

/**
 * Creates Customizer control for input[type=number] field
 */
class Customizer_Number_Control extends WP_Customize_Control {
	public $type = 'number';
	
	public function render_content() {
	?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<input type="number" <?php $this->link(); ?> value="<?php echo intval( $this->value() ); ?>" />
		</label>
	<?php
	}
}