<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'id'=>1,
                'parent_id'=>0,
                'name'=>'首页',
                'en_name'=>'index',
                'path'=>'/index',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>2,
                'parent_id'=>0,
                'name'=>'甲醛治理',
                'en_name'=>'treatment',
                'path'=>'/treatment',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>3,
                'parent_id'=>2,
                'name'=>'室内甲醛治理',
                'en_name'=>'',
                'path'=>'/treatment/room',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>4,
                'parent_id'=>2,
                'name'=>'车内甲醛治理',
                'en_name'=>'',
                'path'=>'/treatment/car',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>5,
                'parent_id'=>0,
                'name'=>'新风系统',
                'en_name'=>'newsystem',
                'path'=>'/newSys',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>6,
                'parent_id'=>0,
                'name'=>'室内空气检测',
                'en_name'=>'test',
                'path'=>'/airTest',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>7,
                'parent_id'=>0,
                'name'=>'产品中心',
                'en_name'=>'Product center of Huaxiajunan',
                'path'=>'/product',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>8,
                'parent_id'=>0,
                'name'=>'成功案例',
                'en_name'=>'Successful cases of Huaxiajunan',
                'path'=>'/success',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>9,
                'parent_id'=>0,
                'name'=>'新闻中心',
                'en_name'=>'news',
                'path'=>'/news',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>10,
                'parent_id'=>0,
                'name'=>'关于我们',
                'en_name'=>'about',
                'path'=>'/about',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>11,
                'parent_id'=>10,
                'name'=>'公司简介',
                'en_name'=>'Company profile of Huaxiajunan',
                'path'=>'/about#company',
                'description'=>'北京华夏君安科技有限公司，是一家从2010年起专业从事室内空气治理服务单位，是国内最早开发和拓展改领域的先驱者之一，华夏君安紧跟时代需要，为室内空气质量贡献自己微薄的力量。我们一直在努力！',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>12,
                'parent_id'=>10,
                'name'=>'企业文化',
                'en_name'=>'culture',
                'path'=>'/about#culture',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>13,
                'parent_id'=>10,
                'name'=>'荣誉资质',
                'en_name'=>'Honor and qualification of Huaxiajunan',
                'path'=>'/about#honor',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>14,
                'parent_id'=>10,
                'name'=>'服务团队',
                'en_name'=>'team',
                'path'=>'/about#team',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ],
            [
                'id'=>15,
                'parent_id'=>10,
                'name'=>'联系我们',
                'en_name'=>'contact',
                'path'=>'/about#contact',
                'description'=>'desc',
                'image_url'=>'',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]
        ];
        DB::table('categories')->insert($category);
    }
}
