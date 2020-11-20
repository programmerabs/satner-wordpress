<?php
function for_post_page(){
      $test = new_cmb2_box([
        'id'            =>  'for_test',
        'title'         =>  'Test cmb 2',
        'object_types'  =>  [ 'post']
      ]);
      $test->add_field([
        'id'      =>  'my_name',
        'name'   =>  'APnar name likhun',
        'desc'    =>  'ekhane apnar name likte home like: (ABS SHAKIL) ',
        'type'    =>  'text'
      ]);
      $test->add_field([
        'id'      =>  'fdsfds',
        'name'   =>  'fsdfdsfds name likhun',
        'desc'    =>  'ekhane apnar name likte home like: (ABS SHAKIL) ',
        'type'    =>  'file'
      ]);
      $test->add_field([
        'id'      =>  'fsdfds',
        'name'   =>  'fsdfdsfds name likhun',
        'desc'    =>  'ekhane apnar name likte home like: (ABS SHAKIL) ',
        'type'    =>  'colorpicker'
      ]);

}
add_action('cmb2_admin_init','for_post_page');
function Homepagesetup(){
  $hpbanner           = new_cmb2_box([
    "id"              => "hp-banner",
    "title"           =>  "Homepage Banner",
    "object_types"    => ['page'],
    'show_on'         => ['key' => 'page-template', 'value' => 'homepage.php']
  ]);
$hpbanner->add_field([
    'id'      =>  'b_tilte',
    'name'   =>  'Banner Titel',
    'type'    =>  'text'
  ]);
  $hpbanner->add_field([
      'id'      =>  'b_heading',
      'name'   =>  'Banner Heading',
      'type'    =>  'text'
    ]);
    $hpbanner->add_field([
        'id'      =>  'b_s_heading',
        'name'   =>  'Banner Sub Heading',
        'type'    =>  'text'
      ]);
      $hpbanner->add_field([
          'id'      =>  'b_bt_1_title',
          'name'   =>  'Button 1 Name',
          'type'    =>  'text_small'
        ]);
        $hpbanner->add_field([
            'id'      =>  'b_bt_1_url',
            'name'   =>  'Button 1 URL',
            'type'    =>  'text_url'
          ]);
          $hpbanner->add_field([
              'id'      =>  'b_bt_2_title',
              'name'   =>  'Button 2 Name',
              'type'    =>  'text_small'
            ]);
            $hpbanner->add_field([
                'id'      =>  'b_bt_2_url',
                'name'   =>  'Button 2 URL',
                'type'    =>  'text_url'
              ]);

}
add_action('cmb2_admin_init', 'Homepagesetup');
