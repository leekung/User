<?php namespace Modules\User\Widgets;

use Modules\User\Repositories\UserRepository;
use Modules\Dashboard\Foundation\Widgets\BaseWidget;

class LatestUserWidget extends BaseWidget
{
    /**
     * @var UserRepository
     */
    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * Get the widget name
     * @return string
     */
    protected function name()
    {
        return 'LatestUserWidget';
    }

    /**
     * Get the widget options
     * Possible options:
     *  x, y, width, height
     * @return string
     */
    protected function options()
    {
        return [
            'width' => '6',
            'height' => '8',
        ];
    }

    /**
     * Get the widget view
     * @return string
     */
    protected function view()
    {
        return 'user::admin.widgets.latest-user';
    }

    /**
     * Get the widget data to send to the view
     * @return string
     */
    protected function data()
    {
        $users = $this->user->latest();

        return ['users' => $users];
    }
}
