<?php

// 필수 필드 표시(*) 숨기기
add_filter( 'gform_required_legend', '__return_empty_string' );

// 대한민국 전화번호 형식 추가
add_filter( 'gform_phone_formats', 'kr_phone_format' );
    

// 전화번호 형식 추가 함수는 훅 바깥에 정의해도 괜찮습니다.
function kr_phone_format( $phone_formats ) {
    $phone_formats['kr'] = array(
        'label'       => '###-####-####',
        'mask'        => '999-9999-9999',
        'regex'       => '/^\D?(\d{3})\D?\D?(\d{4})\D?(\d{4})$/',
        'instruction' => '###-####-####',
    );
 
    return $phone_formats;
}