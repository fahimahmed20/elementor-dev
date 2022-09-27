<?php
class Test_Widget extends \Elementor\Widget_Base {

public function get_name() {
    return 'Test_Widget';
}

public function get_title() {
    return esc_html__( 'test', 'extra-elements' );
}

public function get_icon() {
    return 'eicon-code';
}

public function get_categories() {
    return [ 'general' ];
}
protected  function register_controls() {
    $this->start_controls_section(
        'content_section',
        [
            'label' => esc_html__( 'Content', 'extra-elements' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        ]
    );

    $this->add_control(
        'title',
        [
            'type' => \Elementor\Controls_Manager::TEXT,
            'label' => esc_html__( 'Title', 'extra-elements' ),
            'placeholder' => esc_html__( 'Enter your title', 'extra-elements' ),
        ]
    );

    $this->end_controls_section();
}
protected function render() {

    $settings = $this->get_settings_for_display();
    $team_name = $settings['title'];
    ?>
    <h3>
        <?php echo $team_name; ?>
    </h3>
    <?php
}

}
