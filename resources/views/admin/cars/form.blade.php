@extends('twill::layouts.form')

@section('contentFields')
    @formField('wysiwyg', [
    'name' => 'description',
    'label' => 'Opmerkingen',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'maxlength' => 9999,
    ])

    @formField('input', [
    'name' => 'price',
    'label' => 'Prijs',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'fuel',
    'label' => 'Brandstof',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'doors',
    'label' => 'Aantal deuren',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'transmission',
    'label' => 'Transmissie',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'color',
    'label' => 'Kleuren',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'mileage',
    'label' => 'Kilometerstand',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'construction_year',
    'label' => 'Bouwjaar',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'date',
    'label' => 'Datum deel 1',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'btw',
    'label' => 'BTW Aftrekbaar',
    'maxlength' => 100
    ])

    @formField('wysiwyg', [
    'name' => 'options',
    'label' => 'Aanwezige opties',
    'toolbarOptions' => [ [ 'header' => [1, 2, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
    'placeholder' => 'Case study text',
    'maxlength' => 200,
    'editSource' => true,
    'note' => 'Hint message',
    ])

    @formField('input', [
    'name' => 'cylinder',
    'label' => 'Aantal cilinders',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'engine_size',
    'label' => 'Motorinhoud',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'power',
    'label' => 'Vermogen',
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'weight',
    'label' => 'Gewicht',
    'maxlength' => 100
    ])

    @formField('medias', [
    'name' => 'image',
    'label' => 'Slideshow',
    'max' => 30,
    'fieldNote' => 'Minimum image width: 1500px'
    ])
@stop
