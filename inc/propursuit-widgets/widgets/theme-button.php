<?php
namespace ProjectName_Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Theme_Button extends \Elementor\Widget_Base {

	public function get_name() {
		return 'theme_button';
	}

	public function get_title() {
		return esc_html__( 'Button', 'projectname' );
	}

	public function get_icon() {
		return 'eicon-button';
	}

	public function get_categories() {
		return [ 'projectname' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'section_button',
			[
				'label' => esc_html__( 'Theme Button', 'projectname' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'button_style',
			[
				'label' => esc_html__( 'Theme', 'projectname' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
                    '' => esc_html__( 'Default', 'projectname' ),
                    'btn-primary' => esc_html__( 'Primary', 'projectname' ),
                    'btn-white' => esc_html__( 'White (black text)', 'projectname' ),
                    'btn-matte-white' => esc_html__( 'Matte White', 'projectname' ),
                ],
			]
        );


        $this->add_responsive_control(
			'full_width',
			[
				'label' => esc_html__( 'Full Width', 'projectname' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'projectname' ),
				'label_off' => esc_html__( 'False', 'projectname' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        $this->add_control(
			'uppercase',
			[
				'label' => esc_html__( 'Uppercase', 'projectname' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'projectname' ),
				'label_off' => esc_html__( 'False', 'projectname' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        $this->add_control(
			'nopadding',
			[
				'label' => esc_html__( 'Remove paddings', 'projectname' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'projectname' ),
				'label_off' => esc_html__( 'False', 'projectname' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);

        $this->add_control(
			'responsive',
			[
				'label' => esc_html__( 'Responsive', 'projectname' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'projectname' ),
				'label_off' => esc_html__( 'False', 'projectname' ),
				'return_value' => 'yes',
				'default' => '',
			]
		);


		$this->add_control(
			'text',
			[
				'label' => esc_html__( 'Text', 'projectname' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'default' => esc_html__( 'Click here', 'projectname' ),
			]
		);

		$this->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', 'projectname' ),
				'type' => \Elementor\Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => esc_html__( 'https://', 'projectname' ),
				
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label' => esc_html__( 'Alignment', 'projectname' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'options' => [
					'left'    => [
						'title' => esc_html__( 'Left', 'projectname' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'projectname' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'projectname' ),
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
				'label' => esc_html__( 'Size', 'projectname' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'btn-xsmall' => esc_html__( 'X Small', 'projectname' ),
                    'btn-small' => esc_html__( 'Small', 'projectname' ),
                    '' => esc_html__( 'Medium', 'projectname' ),
                    'btn-large' => esc_html__( 'Large', 'projectname' ),
                    'btn-xlarge' => esc_html__( 'Extra Large', 'projectname' ),
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
				'label' => esc_html__( 'Left Icon', 'projectname' ),
			]
		);

		$this->add_control(
			'left_icon',
			[
				'label' => esc_html__( 'Choose Icon', 'projectname' ),
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
				'label' => esc_html__( 'Right Icon', 'projectname' ),
			]
		);

		$this->add_control(
			'right_icon',
			[
				'label' => esc_html__( 'Choose Icon', 'projectname' ),
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
				'label' => esc_html__( 'Custom Style', 'projectname' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'class_name',
			[
				'label' => esc_html__( 'Custom Class', 'projectname' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'separator' => 'before',
				'default' => esc_html__( '', 'projectname' ),
				'placeholder' => esc_html__( 'class-name', 'projectname' ),
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