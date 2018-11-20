<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Usuarios
        Permission::create([
            'name'          =>'Navegar Usuarios',
            'slug'          =>'Usuarios.index',
            'description'   =>'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          =>'Ver detalle de Usuario',
            'slug'          =>'Usuarios.show',
            'description'   =>'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'          =>'Edición Usuarios',
            'slug'          =>'Usuarios.edit',
            'description'   =>'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'          =>'Eliminar Usuario',
            'slug'          =>'Usuarios.destroy',
            'description'   =>'Eliminar cualquier usuario del sistema',
        ]);
        //------------------------------------------------
        //Roles
        //------------------------------------------------
        Permission::create([
            'name'          =>'Navegar Roles',
            'slug'          =>'Roles.index',
            'description'   =>'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'          =>'Ver detalle de Rol',
            'slug'          =>'Roles.show',
            'description'   =>'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'          =>'Crear Rol',
            'slug'          =>'Roles.create',
            'description'   =>'Crear rol del sistema',
        ]);
        Permission::create([
            'name'          =>'Edición Rol',
            'slug'          =>'Roles.edit',
            'description'   =>'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'          =>'Eliminar Rol',
            'slug'          =>'Roles.destroy',
            'description'   =>'Eliminar cualquier rol del sistema',
        ]);
        //------------------------------------------------
        //Datos Básicos -- Tipo de Documentos
        //------------------------------------------------
        Permission::create([
            'name'          =>'Navegar Tipo de Documento',
            'slug'          =>'Documento.index',
            'description'   =>'Lista y navega todos los documentos en datos básicos',
        ]);
        Permission::create([
            'name'          =>'Ver detalle de Tipo de Documento',
            'slug'          =>'Documento.show',
            'description'   =>'Ver en detalle cada Tipo de Documento',
        ]);
        Permission::create([
            'name'          =>'Crear Tipo de Documento',
            'slug'          =>'Documento.create',
            'description'   =>'Crear Tipo de Documento',
        ]);
        Permission::create([
            'name'          =>'Edición Tipo de Documento',
            'slug'          =>'Documento.edit',
            'description'   =>'Editar cualquier Tipo de Documento',
        ]);
        Permission::create([
            'name'          =>'Eliminar Tipo de Documento',
            'slug'          =>'Documento.destroy',
            'description'   =>'Eliminar cualquier Tipo de Documento',
        ]);
        //------------------------------------------------
        //Datos Básicos -- Tipo de Solicitantes
        //------------------------------------------------
        Permission::create([
            'name'          =>'Navegar Tipo de Solicitante',
            'slug'          =>'Solicita.index',
            'description'   =>'Lista y navega todos los tipos de solicitantes',
        ]);
        Permission::create([
            'name'          =>'Ver detalle de Tipo de Solicitante',
            'slug'          =>'Solicita.show',
            'description'   =>'Ver en detalle cada Tipo de Solicitante',
        ]);
        Permission::create([
            'name'          =>'Crear Tipo de Solicitante',
            'slug'          =>'Solicita.create',
            'description'   =>'Crear Tipo de Solicitante',
        ]);
        Permission::create([
            'name'          =>'Edición Tipo de Solicitante',
            'slug'          =>'Solicita.edit',
            'description'   =>'Editar cualquier Tipo de Solicitante',
        ]);
        Permission::create([
            'name'          =>'Eliminar Tipo de Solicitante',
            'slug'          =>'Solicita.destroy',
            'description'   =>'Eliminar cualquier Tipo de Solicitante',
        ]);
        //------------------------------------------------
        //Datos Básicos -- Tipo de Identificación
        //------------------------------------------------
        Permission::create([
            'name'          =>'Navegar Tipo de Identificación',
            'slug'          =>'Identidad.index',
            'description'   =>'Lista y navega todos los tipos de Identificación',
        ]);
        Permission::create([
            'name'          =>'Ver detalle de Tipo de Identificación',
            'slug'          =>'Identidad.show',
            'description'   =>'Ver en detalle cada Tipo de Identificación',
        ]);
        Permission::create([
            'name'          =>'Crear Tipo de Identificación',
            'slug'          =>'Identidad.create',
            'description'   =>'Crear Tipo de Identificación',
        ]);
        Permission::create([
            'name'          =>'Edición Tipo de Identificación',
            'slug'          =>'Identidad.edit',
            'description'   =>'Editar cualquier Tipo de Identificación',
        ]);
        Permission::create([
            'name'          =>'Eliminar Tipo de Identificación',
            'slug'          =>'Identidad.destroy',
            'description'   =>'Eliminar cualquier Tipo de Identificación',
        ]);

        //------------------------------------------------
        //Datos Básicos -- Documentos por Tipo de Solicitante
        //------------------------------------------------
        Permission::create([
            'name'          =>'Navegar Tipo de Documentos por Solicitante',
            'slug'          =>'Documentos.index',
            'description'   =>'Lista y navega todos los tipos de Documentos por Solicitante',
        ]);
        Permission::create([
            'name'          =>'Ver detalle de Tipo de Documentos por Solicitante',
            'slug'          =>'Documentos.show',
            'description'   =>'Ver en detalle cada Tipo de Documentos por Solicitante',
        ]);
        Permission::create([
            'name'          =>'Crear Tipo de Documentos por Solicitante',
            'slug'          =>'Documentos.create',
            'description'   =>'Crear Tipo de Documentos por Solicitante',
        ]);
        Permission::create([
            'name'          =>'Edición Tipo de Documentos por Solicitante',
            'slug'          =>'Documentos.edit',
            'description'   =>'Editar cualquier Tipo de Documentos por Solicitante',
        ]);
        Permission::create([
            'name'          =>'Eliminar Tipo de Documentos por Solicitante',
            'slug'          =>'Documentos.destroy',
            'description'   =>'Eliminar cualquier Tipo de Documentos por Solicitante',
        ]);

        //------------------------------------------------
        //Datos Básicos -- Medicamentos
        //------------------------------------------------
        Permission::create([
            'name'          =>'Navegar Medicamentos',
            'slug'          =>'Medicamentos.index',
            'description'   =>'Lista y navega todos los Medicamentos',
        ]);
        Permission::create([
            'name'          =>'Ver detalle de Medicamento',
            'slug'          =>'Medicamentos.show',
            'description'   =>'Ver en detalle cada Medicamento',
        ]);
        Permission::create([
            'name'          =>'Crear Medicamento',
            'slug'          =>'Medicamentos.create',
            'description'   =>'Crear un Medicamento',
        ]);
        Permission::create([
            'name'          =>'Edición de Medicamento',
            'slug'          =>'Medicamentos.edit',
            'description'   =>'Editar cualquier Medicamento',
        ]);
        Permission::create([
            'name'          =>'Eliminar Medicamento',
            'slug'          =>'Medicamentos.destroy',
            'description'   =>'Eliminar cualquier Medicamento',
        ]);
    }
}
