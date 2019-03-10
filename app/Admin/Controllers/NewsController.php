<?php

namespace App\Admin\Controllers;

use App\Models\News;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

use App\Models\Category;

class NewsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('新闻列表')
            ->description('')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('新闻详情')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑')
            ->description('')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建新闻')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News);

        $grid->id('Id');
        $grid->title('题目');
        $grid->category_id('分类ID');
        // $grid->content('内容');
        $grid->thumbnail('封面图');
        $grid->status('状态');
        $grid->read_count('阅读数量');
        $grid->created_at('创建时间');
        $grid->updated_at('更新时间');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));

        $show->id('Id');
        $show->title('题目');
        $show->category_id('新闻分类');
        $show->content('内容');
        $show->thumbnail('缩略图');
        $show->status('状态');
        $show->read_count('阅读数量');
        $show->created_at('创建日期');
        $show->updated_at('更新日期');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News);

        $form->text('title', '题目');
        // $form->number('category_id', '分类');
        $form->select('category_id','分类')->options('/api/admin_categories');
        // $form->textarea('content', 'Content');
        $form->ueditor('content','新闻内容')->rules('required');
        // $form->text('thumbnail', '封面图');
        $form->image('thumbnail', '封面图')->move('public/uploads/thunbnails');
        $form->number('status', '状态');
        $form->number('read_count', '阅读次数');

        return $form;
    }
}
