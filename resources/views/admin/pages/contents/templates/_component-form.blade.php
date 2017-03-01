<template id="component-form-template">

    {!! Form::open([
        'method'                => "PATCH",
        'route'                 => 'admin::pages.sort',
        'role'                  => 'form' ,
        'id'                    => '&#123;&#123;"update_component_"+component.id+"_form"&#125;&#125;',

        // 'class'                 => 'pageslists--sort-form',
        ]) !!}

        //se edita eñ componente aqui

            {!! Form::submit("Guardar", [
                'class' => 'btn waves-effect waves-light',
                'form'  => '&#123;&#123;"update_component_"+component.id+"_form"&#125;&#125;'
            ]) !!}
        </div>
    {!! Form::close() !!}

</template>
