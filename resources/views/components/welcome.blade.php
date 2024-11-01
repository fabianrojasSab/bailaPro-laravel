<div class="grid lg:grid-cols-2 dm:grid-cols-2 sm:grid-cols-2 p-6 bg-white border-b border-gray-200">
    @if(auth()->user()->estado_id == '1')
        @if(auth()->user()->rol_id == '2')
            <!-- Contenido para profesores -->
            <x-card tittle="Ver clases" description="Visualiza las clases que tienes asignadas como profesor de baile." ruta="lsn.r"/>
        @endif
        @if(auth()->user()->rol_id == '1')
            <!-- Contenido para estudiantes -->
            <x-card tittle="Inscripcion de clase" description="Mira las clases disponibles para incribirte a alguna de ellas." ruta="ncp.r"/>
            <x-card tittle="Ver mis clases" description="Me muestra el listado de las clases a las que estoy inscrito" ruta="lsn.r"/>
        @endif
        @if(auth()->user()->rol_id == '3')
            <!-- Contenido para administradores -->
            <x-card tittle="Usuarios" description="Puedes visualizar el listado de todos los usuario del sistema, realizar nuevos registros, editar la informacion del usuario ó eliminar." ruta="usr.r"/>
            <x-card tittle="Profesores" description="Ver el listado de profesores, realizar el cambio de estado, ingresar informacion ó eliminar profesores." ruta="tch.r"/>
            <x-card tittle="Estudiantes" description="Realizar el registro de estudiantes y editar su informacion al igual que la eliminacion de los mismos." ruta="std.r"/>
            <x-card tittle="Pagos" description="Realizar registro de pagos" ruta="pym.r"/>
            <x-card tittle="Clases" description="Realizar registro de clases, eliminar o editarlas" ruta="lsn.r"/>
            <x-card tittle="Inscripcciones" description="Ver el listado de incripciones que se han realizado e inscribir a algun estudiante a una clase que ya se encuentre creada" ruta="ncp.r"/>    
        @endif
    @else
    <div>Usted se encuentra en estado PRE-REGISTRO, por favor comuniquese con su administrador</div>
    @endif

</div>
