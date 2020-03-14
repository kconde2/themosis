<?php

namespace App\Forms\Auth;

use Themosis\Field\Contracts\FieldFactoryInterface;
use Themosis\Forms\Contracts\FormFactoryInterface;
use Themosis\Forms\Contracts\Formidable;
use Themosis\Forms\Contracts\FormInterface;

class LoginForm implements Formidable
{
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
        return $factory->make()
            ->add($fields->email('email', [
                'rules' => 'required|string|email'
            ]))
            ->add($fields->password('password', [
                'rules' => 'required|string'
            ]))
            ->add($fields->checkbox('remember', [
                'label' => __('Remember Me')
            ]))
            ->add($fields->button('login', [
                'label' => __('Login')
            ]))
            ->get();
    }
}
