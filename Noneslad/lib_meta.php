<?php
/**
 * Fichier non fonctionnel en l'état il faut le passer en objet !!
 * et lui donner un acces BDD avec une table corresspondante !
 */
// FONCTIONS D'EDITION HTML
// NONESLAD
// VERSION 1
// 23/09/2011
require_once('php/connect_bd.php');


function edit_meta_tag($lib_page) {
    $sql = "select * from page where libelle_page = '" . $lib_page . "'";
    $req = mysql_query($sql);
    if ($exist = mysql_fetch_array(mysql_query($sql))) {
        meta_func(
                $exist['titre'], $exist['auteur'], $exist['categorie'], $exist['copyright'], $exist['langage'], $exist['description'], $exist['generator'], $exist['distribution'], $exist['identifier_url'], $exist['keywords'], $exist['publisher'], $exist['replyto'], $exist['revisit_after'], $exist['ggbot'], $exist['content_type'], $exist['charset']
        );
    } else
        echo mysql_error();
}

// FONCTIONS SUR LES META
function meta_func($title, $author, $category, $copyright, $language, $description, $generator, $distribution, $identifier, $keywords, $publisher, $replyto, $revisitafter, $ggbots, $type, $charset) {
    edit_meta_title($title);
    edit_meta_author($author);
    edit_meta_category($category);
    edit_meta_copyright($copyright);
    edit_meta_language($language);
    edit_meta_description($description);
    edit_meta_distribution($distribution);
    edit_meta_generator($generator);
    edit_meta_identifier_url($identifier);
    edit_meta_keywords($keywords);
    edit_meta_publisher($publisher);
    edit_meta_replyto($replyto);
    edit_meta_revisit_after($revisitafter);
    edit_meta_ggbots($ggbots);
    edit_meta_type($type, $charset);
    //edit_meta_equiv_language($content_language);
    //edit_meta_refresh($refresh,$urlrefresh);
    //edit_meta_pragma($pragma);		
}

function edit_meta_title($f_title) {
    if ($f_title != '') {
        echo
        '<title>' . $f_title . '</title>
';
    } else {
        echo
        '<!-- La balise  "title" n\'a pas �té renseignée -->';
    }
}

function edit_meta_author($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "author" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise meta "author" n\'a pas été renseignée -->';
    }
}

function edit_meta_category($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "category" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "category" n\'a pas été renseignée -->';
    }
}

function edit_meta_copyright($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "copyright" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "copyright" n\'a pas été renseignée -->';
    }
}

function edit_meta_language($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "language" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "language" n\'a pas été renseignée -->';
    }
}

function edit_meta_description($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "description" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "description" n\'a pas été renseignée.  Balise pourtant importante pour le réferencement !!!-->';
    }
}

function edit_meta_distribution($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "distribution" content = "global"/>';
    } else {
        echo
        '<!-- La balise  "distribution" n\'a pas été renseignée. -->';
    }
}

function edit_meta_generator($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "generator" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "generator" n\'a pas été renseignée. -->';
    }
}

function edit_meta_identifier_url($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "identifier-url" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "identifier_url" n\'a pas été renseignée. -->';
    }
}

function edit_meta_keywords($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "keywords" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "keywords" n\'a pas été renseignée. -->';
    }
}

function edit_meta_publisher($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "publisher" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "publisher" n\'a pas été renseignée. -->';
    }
}

function edit_meta_replyto($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "reply-to" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "reply-to" n\'a pas été renseignée. -->';
    }
}

function edit_meta_revisit_after($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "revisit-after" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "revisit-after" n\'a pas été renseignée. -->';
    }
}

function edit_meta_ggbots($f_content) {
    if ($f_content != '') {
        echo
        '<meta name = "googlebot" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "googlebots" n\'a pas été renseignée. -->';
    }
}

function edit_meta_type($f_content, $f_charset) {
    if ($f_content != '') {
        if ($f_charset != '') {
            echo
            '<meta http-equiv = "content-type" content = "' . $f_content . '; charset = ' . $f_charset . '"/>';
        } else {
            echo
            '<!-- La balise  "http-equiv -> content-type" n\'a pas été renseignée correcetement, il manque l\'url de raffraichissement -->';
        }
    } else {
        echo
        '<!-- La balise  "http-equiv -> content-type" n\'a pas été renseignée. -->';
    }
}

function edit_meta_equiv_language($f_content) {
    if ($f_content != '') {
        echo
        '<meta http-equiv = "content-language" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "http-equiv -> content-language" n\'a pas été renseignée. -->';
    }
}

function edit_meta_refresh($f_content, $f_url) {
    if ($f_content != '') {
        if ($f_url != '') {
            echo
            '<meta http-equiv = "refresh" content = "' . $f_content . '; url = ' . $f_url . '"/>';
        } else {
            echo
            '<!-- La balise  "refresh" n\'a pas été renseignée correcetement, il manque l\'url de raffraichissement -->';
        }
    } else {
        echo
        '<!-- La balise  "refresh" n\'a pas été renseignée. -->';
    }
}

function edit_meta_pragma($f_content) {
    if ($f_content != '') {
        echo
        '<meta http-equiv = "pragma" content = "' . $f_content . '"/>';
    } else {
        echo
        '<!-- La balise  "pragma" n\'a pas été renseignée. -->\r';
    }
}

?>