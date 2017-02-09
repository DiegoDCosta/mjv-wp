<?php

// Cria o numero do titulo dos destaques das internas
function BtnLaranja($params, $content = null) {
    extract(shortcode_atts(array(
        'url'=> '',
        'class' => ''
                    ), $params));
    return
        '<div class="text-center contact-us">
            <div class="btnLaranja '.$class.' col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5 col-xs-10 col-xs-offset-1">
                <a href="'.$url.'" class="contact-us-btn">'. ucwords($content) .'</a>
            </div>
        </div>';
}

add_shortcode('btnLaranja', 'BtnLaranja');

// Cria o numero do titulo dos destaques das internas
function numeroTitulo($params, $content = null) {
    extract(shortcode_atts(array(
        'class' => ''
                    ), $params));
    return
            '<h1 class="destaques-internas-numero ' . $class . '">' . ucwords($content) . '</h1>';
}

add_shortcode('numero', 'numeroTitulo');

// Cria o titulo dos destaques das internas
function Titulo($params, $content = null) {

    extract(shortcode_atts(array(
        'class' => ''
                    ), $params));
    return
            '<div class="destaques-internas-titulo ' . $class . '">' . ucwords($content) . '</div>';
}

add_shortcode('titulo', 'Titulo');

//Cria o box dos destaques das internas
function box($params, $content = null) {
    extract(shortcode_atts(array(
        'class' => ''
                    ), $params));

    return
            '<div class="destaques-internas ' . $class . '">' . do_shortcode($content) . '</div>';
}

add_shortcode('callout', 'box');
