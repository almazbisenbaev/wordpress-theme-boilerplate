<?php
namespace MyThemeName_Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Theme_Button extends \Elementor\Widget_Base {

	public function get_name() {
		return 'theme_button';
	}

	public function get_title() {
		return esc_html__( 'Button', 'mythemename' );
	}

	public function get_icon() {
		return 'eicon-button';
	}

	public function get_categories() {
		return [ 'mythemename' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'section_button',
			[
				'label' => esc_html__( 'Theme Button', 'mythemename' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'button_style',
			[
				'label' => esc_html__( 'Theme', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
                    '' => esc_html__( 'Default', 'mythemename' ),
                    'btn-primary' => esc_html__( 'Primary', 'mythemename' ),
                    'btn-white' => esc_html__( 'White (black text)', 'mythemename' ),
                    'btn-matte-white' => esc_html__( 'Matte White', 'mythemename' ),
                ],
			]
        );


        $this->add_responsive_control(
			'full_width',
			[
				'label' => esc_html__( 'Full Width', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'mythemename' ),
				'label_off' => esc_html__( 'False', 'mythemename' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        $this->add_control(
			'uppercase',
			[
				'label' => esc_html__( 'Uppercase', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'mythemename' ),
				'label_off' => esc_html__( 'False', 'mythemename' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        $this->add_control(
			'nopadding',
			[
				'label' => esc_html__( 'Remove paddings', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'mythemename' ),
				'label_off' => esc_html__( 'False', 'mythemename' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        $this->add_control(
			'responsive',
			[
				'label' => esc_html__( 'Responsive', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'mythemename' ),
				'label_off' => esc_html__( 'False', 'mythemename' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);


		$this->add_control(
			'text',
			[
				'label' => esc_html__( 'Text', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Click here', 'mythemename' ),
			]
		);

		$this->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'https://', 'mythemename' ),
				
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label' => esc_html__( 'Alignment', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'options' => [
					'left'    => [
						'title' => esc_html__( 'Left', 'mythemename' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'mythemename' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'mythemename' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'default' => '',
			]
		);

		$this->add_control(
			'button_size',
			[
				'label' => esc_html__( 'Size', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'btn-xsmall' => esc_html__( 'X Small', 'mythemename' ),
                    'btn-small' => esc_html__( 'Small', 'mythemename' ),
                    '' => esc_html__( 'Medium', 'mythemename' ),
                    'btn-large' => esc_html__( 'Large', 'mythemename' ),
                    'btn-xlarge' => esc_html__( 'Extra Large', 'mythemename' ),
                ],
			]
        );

		// Start Icon Tab
		$this->start_controls_tabs(
			'icon_tabs',
			[
				'separator' => 'before'
			]
		);

		$this->start_controls_tab(
			'icon_left_tab',
			[
				'label' => esc_html__( 'Left Icon', 'mythemename' ),
			]
		);

		$this->add_control(
			'left_icon',
			[
				'label' => esc_html__( 'Choose Icon', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => '',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'icon_right_tab',
			[
				'label' => esc_html__( 'Right Icon', 'mythemename' ),
			]
		);

		$this->add_control(
			'right_icon',
			[
				'label' => esc_html__( 'Choose Icon', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => '',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();
		//  Ends Icon Tab
        

		$this->end_controls_section();


        $this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Custom Style', 'mythemename' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'class_name',
			[
				'label' => esc_html__( 'Custom Class', 'mythemename' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'separator' => 'before',
				'default' => esc_html__( '', 'mythemename' ),
				'placeholder' => esc_html__( 'class-name', 'mythemename' ),
			]
		);

        $this->end_controls_section();

	}



	protected function render() {
		$settings = $this->get_settings_for_display();
        $this->add_link_attributes( 'url', $settings['link'] );  ?>

		<a 
			<?= $this->get_render_attribute_string( 'url' ); ?> 
			class="btn 
				   <?= $settings['button_style']; ?> 
				   <?= $settings['button_size']; ?>
				   <?= 'yes' == $settings['uppercase'] ? 'btn-uppercase' : '' ; ?> 
				   <?= 'yes' == $settings['full_width'] ? 'btn-block' : '' ; ?> 
				   <?= 'yes' == $settings['nopadding'] ? 'btn-nopadding' : '' ; ?> 
				   <?= 'yes' == $settings['responsive'] ? 'btn-responsive' : '' ; ?> 
				   <?= $settings['class_name']; ?>"
		>

			<?php if ( !empty($settings['left_icon']['url']) ) { ?>
				<div class="btn-icon">
					<img src="<?= $settings['left_icon']['url']; ?>" alt="">
				</div>
			<?php } ?>

			<div class="btn-text"><?= $settings['text']; ?></div>

			<?php if ( !empty($settings['right_icon']['url']) ) { ?>
				<div class="btn-icon">
					<img src="<?= $settings['right_icon']['url']; ?>" alt="">
				</div>
			<?php } ?>

		</a>

		<?php
	}


	protected function content_template() {
		?>

        <a 
			href="{{{ settings.link }}}" 
			class="btn 
				   {{ settings.button_style }} 
				   {{ settings.button_size }}
				   {{'yes' === settings.uppercase ? 'btn-uppercase' : '' }} 
				   {{'yes' === settings.full_width ? 'btn-block' : '' }} 
				   {{'yes' === settings.nopadding ? 'btn-nopadding' : '' }} 
				   {{'yes' === settings.responsive ? 'btn-responsive' : '' }} 
				   {{ settings.class_name }} "
		>
            <# if ( settings.left_icon.url ) { #>
				<div class="btn-icon">
                    <img src="{{ settings.left_icon.url }}" alt="">
				</div>
            <# } #>
            <div class="btn-text">{{{ settings.text }}}</div>
			<# if ( settings.right_icon.url ) { #>
				<div class="btn-icon">
                    <img src="{{ settings.right_icon.url }}" alt="">
				</div>
            <# } #>
        </a>

		<?php
	}


}