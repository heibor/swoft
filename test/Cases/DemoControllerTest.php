<?php

/*
 * This file is part of Swoft.
 * (c) Swoft <group@swoft.org>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swoft\Test\Cases;


/**
 * @uses      DemoControllerTest
 * @version   2017年11月30日
 * @author    huangzhhui <huangzhwork@gmail.com>
 * @copyright Copyright 2010-2017 Swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class DemoControllerTest extends AbstractTestCase
{

    /**
     * @test
     * @covers \App\Controllers\DemoController
     */
    public function actionView()
    {
        $response = $this->request('GET', '/demo2/view', [], parent::ACCEPT_VIEW);
        $response->assertSuccessful()->assertSee('Swoft')->assertSee('没有使用 layout');
    }

    /**
     * @test
     * @covers \App\Controllers\DemoController
     */
    public function actionLayout()
    {
        $response = $this->request('GET', '/demo2/layout', [], parent::ACCEPT_VIEW);
        $response->assertSuccessful()->assertSee('Swoft')->assertSee('使用布局文件');
    }

    /**
     * @test
     */
    public function actionI18n()
    {
       $response = $this->request('GET', '/demo2/i18n', [], parent::ACCEPT_VIEW);
       $response->assertSuccessful()->assertSee('title');
    }

}