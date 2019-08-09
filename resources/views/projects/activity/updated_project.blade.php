@if (count($activity->changes['after']) == 1)
    {{$activity->user->name}} {{key($activity->changes['after'])}} این پروژه را به روز رسانی کرد
@else
    {{$activity->user->name}} این پروژه را به روز رسانی کرد
@endif