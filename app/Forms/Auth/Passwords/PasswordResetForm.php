<?php

namespace App\Forms\Auth\Passwords;

use Themosis\Core\Auth\Data\PasswordResetData;
use Themosis\Field\Contracts\FieldFactoryInterface;
use Themosis\Forms\Contracts\FormFactoryInterface;
use Themosis\Forms\Contracts\Formidable;
use Themosis\Forms\Contracts\FormInterface;

class PasswordResetForm implements Formidable
{
    /**
     * @var PasswordResetData
     */
    private $data;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    /**
     * Build your form.
     *
     * @param FormFactoryInterface  $factory
     * @param FieldFactoryInterface $fields
     *
     * @return FormInterface
     */
    public function build(FormFactoryInterface $factory, FieldFactoryInterface $fields): FormInterface
    {
        return $factory->make($this->data, [
            'attributes' => [
                'action' => route('password.update')
            ]
        ])
            ->add($fields->hidden('token', [
                'rules' => 'required'
            ]))
            ->add($fields->email('email', [
                'rules' => 'required|email'
            ]))
            ->add($fields->password('password', [
                'rules' => 'required|confirmed|min:6'
            ]))
            ->add($fields->password('password_confirmation', [
                'rules' => 'required|min:6',
                'placeholder' => 'password confirmation'
            ]))
            ->add($fields->submit('reset', [
                'label' => __('Reset Password')
            ]))
            ->get();
    }
}
