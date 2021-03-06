<?php

namespace App\Forms\Auth\Passwords;

use Themosis\Field\Contracts\FieldFactoryInterface;
use Themosis\Forms\Contracts\FormFactoryInterface;
use Themosis\Forms\Contracts\Formidable;
use Themosis\Forms\Contracts\FormInterface;

class EmailResetForm implements Formidable
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
        return $factory->make(null, [
            'attributes' => [
                'action' => route('password.email')
            ]
        ])
            ->add($fields->email('email', [
                'label' => __('E-Mail Address'),
                'rules' => 'required|email'
            ]))
            ->add($fields->submit('reset', [
                'label' => __('Send Password Reset Link')
            ]))
            ->get();
    }
}
