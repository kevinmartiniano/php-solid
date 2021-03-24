<?php

namespace KevinMartiniano\Solid;

use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    public function testEsteEUmSimplesExemploDeTeste()
    {
        $html = new Html();

        $img = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

    public function testCriaUmLinkComImagemComoAncora()
    {
        $html = new Html();

        $img = $html->img("images/photo.jpg");
        $link = $html->a("http://seusite.com/perfil", $img);

        $this->assertEquals("<a href=\"http://seusite.com/perfil\"><img src=\"images/photo.jpg\"></a>", $link);
    }

    public function testCriaUmaLista()
    {
        $html = new Html();
        $list = $html->ul('<li>Kevin</li>');

        $this->assertEquals("<ul><li>Kevin</li></ul>", $list);
    }

    // TODO: Open closed criciple e padrão strategy
}