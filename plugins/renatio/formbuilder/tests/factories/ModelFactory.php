<?php

use Renatio\FormBuilder\Models\Field;
use Renatio\FormBuilder\Models\FieldType;
use Renatio\FormBuilder\Models\Form;
use Renatio\FormBuilder\Models\FormLog;
use Renatio\FormBuilder\Models\Section;
use System\Models\MailTemplate;

/*
 * Form
 */
$factory->define(Form::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->unique()->slug(),
        'template' => factory(MailTemplate::class)->create(),
        'to_email' => $faker->email,
        'to_name' => $faker->name,
    ];
});

/*
 * Field
 */
$factory->define(Field::class, function (Faker\Generator $faker) {
    return [
        'form' => factory(Form::class)->create(),
        'field_type' => factory(FieldType::class)->create(),
        'name' => $faker->word,
        'section' => factory(Section::class)->create(),
    ];
});

/*
 * FieldType
 */
$factory->define(FieldType::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'code' => $faker->unique()->slug(),
    ];
});

/*
 * Section
 */
$factory->define(Section::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

/*
 * FormLog
 */
$factory->define(FormLog::class, function (Faker\Generator $faker) {
    return [
        'form' => factory(Form::class)->create(),
    ];
});

/*
 * MailTemplate
 */
$factory->define(MailTemplate::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->unique()->slug(),
        'subject' => $faker->sentence,
        'description' => $faker->paragraph,
        'content_html' => $faker->paragraph(),
    ];
});