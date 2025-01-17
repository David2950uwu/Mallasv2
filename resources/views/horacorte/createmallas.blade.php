@extends('layouts.main', ['activePage' => 'supervisor', 'titlePage' => 'Supervisor Personal- Creación de Mallas'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-info">
                                <a class="btn btn-sm btn-info float-right" href="{{ route('mallas.index') }}"><i
                                        class="material-icons">reply</i></a>
                                <h3 class="card-title pl- "><b>Diligencia los siguientes datos</b> </h3>
                                <p class="card-category text-white">Creación de mallas</p>
                            </div>
                            @if(session('danger'))
                            <div id="danger-message" class="alert alert-danger">
                                {{ session('danger') }}
                            </div>
                            @endif

                            <!-- formulario nuevo -->
                            <div class=" container-fluid  m-1 p-1">
                                <div class="m-4 p-4">
                                    <form action="{{route('mallas.store')}}" method="POST" class="" id="">
                                        @csrf
                                        <div class="form-row d-flex justify-content-around mt-3">
                                            <div class="form-group col-sm-3 pt-0 mt-0 ">
                                                <label class="text-info" for="users_id"> <b>Nombre
                                                        Asesor</b></label>
                                                <select name="users_id" id="users_id" class="form-control" required>
                                                    @foreach ($usuarios as $usuario)
                                                    <option value="{{ $usuario['id']}}">{{ $usuario['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-3 p-4 ">
                                                <label class="text-info" for="semana"><b>Semana-Asignada</b></label>
                                                <input type="week" class="form-control" name="semana" id="semana"
                                                    required>
                                            </div>
                                            <div class="form-group col-sm-3 ">
                                                <label class="text-info" for="semana"><b>Dia-descanso</b></label>
                                                <input type="date" class="form-control mt-3" oninput="DiaDescanso()"
                                                    onclick="Reset()"
                                                    min="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+4 days"));?>"
                                                    max="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+11 days"));?>"
                                                    name="diadescanso" id="diadescanso" required>
                                            </div>
                                        </div>
                                        <div class="form-row d-flex justify-content-around mt-1">

                                            <div class="form-group col-sm-3 mt-4">
                                                <label class="text-info " for="campaña"><b>Campaña</b></label>
                                                <input type="text" value="MOVISTAR" class="form-control mt-3"
                                                    id="campaña" name="campaña">
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" for="foco"><b>Foco</b></label></label>
                                                <select class="form-control" name="foco">
                                                    <option selected>Selecciona</option>
                                                    <option value="Inbound">Inbound</option>
                                                    <option value="Phoenix">Phoenix</option>
                                                    <option value="Portabilidad">Portabilidad</option>
                                                    <option value="Prepost">Prepost</option>
                                                    <option value="Staff Administrativo">Staff Administrativo</option>
                                                    <option value="Staff Calidad">Staff Calidad</option>
                                                    <option value="Staff Comercial">Staff Comercial</option>
                                                    <option value="Staff Datos Metricas Y Workforce">Staff Datos Metricas Y Workforce</option>
                                                    <option value="Staff Desarrollo">Staff Desarrollo</option>
                                                    <option value="Staff Diseño">Staff Diseño</option>
                                                    <option value="Staff Financiero">Staff Financiero</option>
                                                    <option value="Staff Gerencial">Staff Gerencial</option>
                                                    <option value="Staff Gestión Organizacional y Método">Staff Gestión Organizacional y Método</option>
                                                    <option value="Staff It">Staff It</option>
                                                    <option value="Staff RRHH">Staff RRHH</option>
                                                    <option value="Staff Validacion">Staff Validacion</option>
                                                    <option value="Up Grade">Up Grade</option>
                                                    <option value="Whatsapp Digital">Whatsapp Digital</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-3">
                                                <label class="text-info" for="encargado"><b>Encargado</b></label>
                                                <br>
                                                <select class="form-control" name="encargado">
                                                    <option selected>Selecciona</option>
                                                    <option value="Juan David Cetina Ochoa">Juan David Cetina Ochoa</option>
                                                    <option value="Maria Alejandra Adan Sarmiento">Maria Alejandra Adan Sarmiento</option>
                                                    <option value="Luis Eduardo Bohorquez Buitrago">Luis Eduardo Bohorquez Buitrago</option>
                                                    <option value="Camilo Esteban Romero Leiva">Camilo Esteban Romero Leiva</option>
                                                    <option value="Xiomara Liceth Yule Rivera">Xiomara Liceth Yule Rivera</option>
                                                    <option value="Carlos Daniel Rincon Uneme">Carlos Daniel Rincon Uneme</option>
                                                    <option value="Jhon Sebastian Alape Leyton">Jhon Sebastian Alape Leyton</option>
                                                    <option value="Juan David Vasquez Salazar">Juan David Vasquez Salazar</option>
                                                    <option value="Andres Eduardo Salcedo Guillen">Andres Eduardo Salcedo Guillen</option>
                                                    <option value="Daniel Andres Luengas Caballero">Daniel Andres Luengas Caballero</option>
                                                    <option value="Daniel Ricardo Palacios Bustos">Daniel Ricardo Palacios Bustos</option>
                                                    <option value="David Edilberto Gonzalez Hernandez">David Edilberto Gonzalez Hernandez</option>
                                                    <option value="Erik David Restrepo Garzon">Erik David Restrepo Garzon</option>
                                                    <option value="Gabriel David Cabarcas Ribon">Gabriel David Cabarcas Ribon</option>
                                                    <option value="Jenifer Nicol Suaza Giraldo">Jenifer Nicol Suaza Giraldo</option>
                                                    <option value="Jennifer Alejandra Monroy Ortiz">Jennifer Alejandra Monroy Ortiz</option>
                                                    <option value="Jenny Patricia Barbosa Alvarado">Jenny Patricia Barbosa Alvarado</option>
                                                    <option value="Jenny Rocio Murillo Meneses">Jenny Rocio Murillo Meneses</option>
                                                    <option value="Jesus Antonio Archila Soracipa">Jesus Antonio Archila Soracipa</option>
                                                    <option value="Karen Julissa Auzaque Combita">Karen Julissa Auzaque Combita</option>
                                                    <option value="Nicolas Salazar Delgadillo">Nicolas Salazar Delgadillo</option>
                                                    <option value="Ingrid Johanna Amaya Rincon">Ingrid Johanna Amaya Rincon</option>
                                                    <option value="Maria Jacqueline Arias De Pindray">Maria Jacqueline Arias De Pindray</option>
                                                    <option value="Carlos Alberto Trujillo Vargas">Carlos Alberto Trujillo Vargas</option>
                                                    <option value="Johanna Paola Castrillon Londoño">Johanna Paola Castrillon Londoño</option>
                                                    <option value="Andres Eduardo Vargas Valenzuela">Andres Eduardo Vargas Valenzuela</option>
                                                    <option value="Harold Andres Cardenas Gutierrez">Harold Andres Cardenas Gutierrez</option>
                                                    <option value="Jose Luis Aponte Blanco">Jose Luis Aponte Blanco</option>
                                                    <option value="Linna Lizeth Martinez Sanchez">Linna Lizeth Martinez Sanchez</option>
                                                    <option value="Miguel Leonardo Tocora Campos">Miguel Leonardo Tocora Campos</option>
                                                    <option value="Jesus Antonio Viana Marín">Jesus Antonio Viana Marín</option>
                                                    <option value="Carlos Orlando Pastrana Acevedo">Carlos Orlando Pastrana Acevedo</option>
                                                    <option value="Johan Esteban Riaño Muñoz">Johan Esteban Riaño Muñoz</option>
                                                    <option value="Leidy Milena Quiroga Castañeda">Leidy Milena Quiroga Castañeda</option>
                                                    <option value="Magda Lorena Ramirez Ospina">Magda Lorena Ramirez Ospina</option>
                                                    <option value="Gerencia General">Gerencia General</option>
                                                    <option value="Anderson Fernando Soler Caro">Anderson Fernando Soler Caro</option>
                                                    <option value="Juan Jose Cano Salazar">Juan Jose Cano Salazar</option>
                                                    <option value="Mabel Barragan Salazar">Mabel Barragan Salazar</option>
                                                    <option value="Arias De Pindray Maria Jacqueline">Arias De Pindray Maria Jacqueline</option>
                                                    <option value="Laura Vanesa Currea">Laura Vanesa Currea</option>
                                                    <option value="William Leonardo Torres Peña">William Leonardo Torres Peña</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class=" mt-4 pt-4 ">
                                            <table class=" table-sm table-hover ">
                                                <thead style="background:#00CED1;"
                                                    class="fw-bold text-light text-center">
                                                    <tr class="col-sm-auto m-0 p-0 d-grid justify-content-between">
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            Mallas/Gestión</th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold;"
                                                            scope="col">
                                                            Hr-trab
                                                        </th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">Hr
                                                            Ini
                                                        </th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            H-fin
                                                        </th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            H-ini-alm</th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            H-fin-alm</th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            Break ini</th>
                                                        <th class="col-1" style="font-size:1rem; font-weight: bold; "
                                                            scope="col">
                                                            Break fin
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-center">
                                                    <tr class="col-sm-8 m-0 p-0 d-grid justify-content-center">
                                                        <th class="text-info text-center col-1" style="font-size:1rem;">
                                                            Lunes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name="" id="htrab"
                                                                disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="lunesinicio" id="horainicio"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                value=""></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;  font-size:11px;"
                                                                onchange="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                onclick="calcular('horainicio','horafin','alminicio','almfin','htrab')"
                                                                type="time" name="lunesfinal" id="horafin" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onclick="totalalm('alminicio','almfin')" type="time"
                                                                name="lunes_alm_inicio" id="alminicio" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;  font-size:11px;"
                                                                type="time" name="lunes_alm_final" id="almfin" value=""
                                                                disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;  font-size:11px;"
                                                                onclick="totaldes('descinilun','descfinlun')"
                                                                onchange="totaldes('descinilun','descfinlun')"
                                                                type="time" name="lunesdescanso1" id="descinilun"
                                                                value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;  font-size:11px;"
                                                                type="time" name="lunesdescanso2" id="descfinlun"
                                                                value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem ;">
                                                            Martes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabmar" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martesinicio" id="horainiciomar"
                                                                value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                onclick="calcular('horainiciomar','horafinmar','alminiciomar','almfinmar','htrabmar')"
                                                                type="time" name="martesfinal" id="horafinmar" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onclick="totalalm('alminiciomar','almfinmar')"
                                                                type="time" name="martes_alm_inicio" id="alminiciomar"
                                                                value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="martes_alm_final" id="almfinmar"
                                                                value="" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="martesdescanso1" id="desinimar"
                                                                onclick="totaldes('desinimar','descfinmar')"
                                                                onchange="totaldes('desinimar','descfinmar')" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="martesdescanso2" id="descfinmar"
                                                                value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Miercoles</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabmie" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercolesinicio" id="horainiciomie"
                                                                value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                onclick="calcular('horainiciomie','horafinmie','alminiciomie','almfinmie','htrabmie')"
                                                                type="time" name="miercolesfinal" id="horafinmie"
                                                                value=""></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onclick="totalalm('alminiciomie','almfinmie')"
                                                                type="time" name="miercoles_alm_inicio"
                                                                id="alminiciomie" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="miercoles_alm_final" id="almfinmie"
                                                                value="" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="miercolesdescanso1" id="descinimie"
                                                                onclick="totaldes('descinimie','descfinmie')"
                                                                onchange="totaldes('descinimie','descfinmie')" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="miercolesdescanso2" id="descfinmie"
                                                                value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Jueves</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabjue" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="juevesinicio" id="horainiciojue"
                                                                value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onchange="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                onclick="calcular('horainiciojue','horafinjue','alminiciojue','almfinjue','htrabjue')"
                                                                type="time" name="juevesfinal" id="horafinjue" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                onclick="totalalm('alminiciojue','almfinjue')"
                                                                type="time" name="jueves_alm_inicio" id="alminiciojue"
                                                                value="" required>
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="jueves_alm_final" id="almfinjue"
                                                                value="" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal; font-size:11px;"
                                                                type="time" name="juevesdescanso1" id="descinijue"
                                                                onchange="totaldes('descinijue','descfinjue')"
                                                                onclick="totaldes('descinijue','descfinjue')" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="juevesdescanso2" id="descfinjue"
                                                                value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Viernes</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabvie" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernesinicio" id="horainiciovie"
                                                                value=""></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                onclick="calcular('horainiciovie','horafinvie','alminiciovie','almfinvie','htrabvie')"
                                                                type="time" name="viernesfinal" id="horafinvie"
                                                                value=""></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onclick="totalalm('alminiciovie','almfinvie')"
                                                                type="time" name="viernes_alm_inicio" id="alminiciovie"
                                                                value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="viernes_alm_final" id="almfinvie"
                                                                value="" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="viernesdescanso1" id="descinivie"
                                                                onchange="totaldes('descinivie','descfinvie')"
                                                                onclick="totaldes('descinivie','descfinvie')" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="viernesdescanso2" id="descfinvie"
                                                                value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Sabado</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabsab" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabadoinicio" id="horainiciosab"
                                                                value=""></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                onclick="calcular('horainiciosab','horafinsab','alminiciosab','almfinsab','htrabsab')"
                                                                type="time" name="sabadofinal" id="horafinsab" value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onclick="totalalm('alminiciosab','almfinsab')"
                                                                type="time" name="sabado_alm_inicio" id="alminiciosab"
                                                                value="">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="sabado_alm_final" id="almfinsab"
                                                                value="" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="sabadodescanso1" id="descinisab"
                                                                onchange="totaldes('descinisab','descfinsab')"
                                                                onclick="totaldes('descinisab','descfinsab')" value=""
                                                                required></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="sabadodescanso2" id="descfinsab"
                                                                value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-info text-center" style="font-size:1rem;">
                                                            Domingo</th>
                                                        <td><input
                                                                class="form-control text-info text-center font-weight-bold col w-100"
                                                                style="font-size:medium;" type="text" name=""
                                                                id="htrabdom" disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingoinicio" id="horainiciodom">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                onclick="calcular('horainiciodom','horafindom','alminiciodom','almfindom','htrabdom')"
                                                                type="time" name="domingofinal" id="horafindom"></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onclick="totalalm('alminiciodom','almfindom')"
                                                                type="time" name="domingo_alm_inicio" id="alminiciodom">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="domingo_alm_final" id="almfindom"
                                                                disabled></td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                onchange="totaldes('descinidom','descfindom')"
                                                                onclick="totaldes('descinidom','descfindom')"
                                                                type="time" name="domingodescanso1" id="descinidom">
                                                        </td>
                                                        <td><input
                                                                style="border-radius:30px; border:1px solid #2980B9; box-shadow:0px 0px 5px #4DD0E1;
                                                                 font-weight:bold; text-align:end; color:teal;font-size:11px;"
                                                                type="time" name="domingodescanso2" id="descfindom"
                                                                disabled>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <script>
                                                /*funcion calcular hora de trabajo total  */
                                                function calcular(id1, id2, id3, id4, id5) {


                                                    let a = parseFloat(document.getElementById(id1).value) || 0;
                                                    let b = parseFloat(document.getElementById(id2).value) || 0;
                                                    let c = parseFloat(document.getElementById(id3).value) || 0;
                                                    let d = parseFloat(document.getElementById(id4).value) || 0;
                                                    let total = document.getElementById(id5).value = (b - a) - (
                                                        d - c) + "-horas";
                                                }
                                                /*  funcion automatización hora almuerzo*/
                                                function totalalm($id1, $id2) {
                                                    let hora1Input = document.getElementById($id1);
                                                    let hora2Input = document.getElementById($id2);

                                                    hora1Input.addEventListener('change', () => {
                                                        // Obtener el valor de la hora 1
                                                        let hora1Value = hora1Input.value;
                                                        // Crear un objeto de fecha con la fecha actual
                                                        let fechaActual = new Date();
                                                        // Obtener las horas y minutos de la hora 1
                                                        let [hora, minuto] = hora1Value.split(':');
                                                        // Configurar la fecha actual con las horas y minutos de la hora 1
                                                        fechaActual.setHours(hora);
                                                        fechaActual.setMinutes(minuto);
                                                        // Sumar una hora a la fecha actual
                                                        fechaActual.setHours(fechaActual.getHours() + 1);
                                                        // Obtener la hora y los minutos de la fecha actualizada
                                                        const hora2 = fechaActual.getHours().toString()
                                                            .padStart(2,
                                                                '0');
                                                        const minuto2 = fechaActual.getMinutes().toString()
                                                            .padStart(2, '0');
                                                        // Actualizar el valor del input de hora 2
                                                        hora2Input.value = `${hora2}:${minuto2}`;
                                                    });
                                                }
                                                /*  funcion automatización break*/
                                                function totaldes($id1, $id2) {
                                                    let hora1Input = document.getElementById($id1);
                                                    let hora2Input = document.getElementById($id2);

                                                    hora1Input.addEventListener('change', () => {

                                                        let hora1Value = hora1Input.value;
                                                        let fechaActual = new Date();
                                                        let [hora, minuto] = hora1Value.split(':');

                                                        fechaActual.setHours(hora);
                                                        fechaActual.setMinutes(minuto);
                                                        // Sumar 20 minutos a la fecha actual
                                                        fechaActual.setMinutes(fechaActual.getMinutes() + 20);
                                                        // Obtener la hora y los minutos de la fecha actualizada
                                                        const hora2 = fechaActual.getHours().toString()
                                                            .padStart(2, '0');
                                                        const minuto2 = fechaActual.getMinutes().toString()
                                                            .padStart(2, '0');
                                                        // Actualizar el valor del input de hora 2
                                                        hora2Input.value = `${hora2}:${minuto2}`;
                                                    });
                                                }

                                                /*funcion seleccion de dia descanso*/
                                                function DiaDescanso() {
                                                        const fechaInput = document.getElementById('diadescanso');
                                                        let lun1Input = document.getElementById('horainicio');
                                                        let lun2Input = document.getElementById('horafin');
                                                        let lun3Input = document.getElementById('alminicio');
                                                        let lun4Input = document.getElementById('descinilun');
                                                        let lun5Imput = document.getElementById('descfinlun');
                                                        let lun6Imput = document.getElementById('almfin');

                                                        let mar1Input = document.getElementById('horainiciomar');
                                                        let mar2Input = document.getElementById('horafinmar');
                                                        let mar3Input = document.getElementById('alminiciomar');
                                                        let mar4Input = document.getElementById('desinimar');
                                                        let mar5Imput = document.getElementById('descfinmar');
                                                        let mar6Imput = document.getElementById('almfinmar');

                                                        let mie1Input = document.getElementById('horainiciomie');
                                                        let mie2Input = document.getElementById('horafinmie');
                                                        let mie3Input = document.getElementById('alminiciomie');
                                                        let mie4Input = document.getElementById('descinimie');
                                                        let mie5Imput = document.getElementById('descfinmie');
                                                        let mie6Imput = document.getElementById('almfinmie');

                                                        let jue1Input = document.getElementById('horainiciojue');
                                                        let jue2Input = document.getElementById('horafinjue');
                                                        let jue3Input = document.getElementById('alminiciojue');
                                                        let jue4Input = document.getElementById('descinijue');
                                                        let jue5Imput = document.getElementById('descfinjue');
                                                        let jue6Imput = document.getElementById('almfinjue');

                                                        let vie1Input = document.getElementById('horainiciovie');
                                                        let vie2Input = document.getElementById('horafinvie');
                                                        let vie3Input = document.getElementById('alminiciovie');
                                                        let vie4Input = document.getElementById('descinivie');
                                                        let vie5Imput = document.getElementById('descfinvie');
                                                        let vie6Imput = document.getElementById('almfinvie');

                                                        let sab1Input = document.getElementById('horainiciosab');
                                                        let sab2Input = document.getElementById('horafinsab');
                                                        let sab3Input = document.getElementById('alminiciosab');
                                                        let sab4Input = document.getElementById('descinisab');
                                                        let sab5Imput = document.getElementById('descfinsab');
                                                        let sab6Imput = document.getElementById('almfinsab');

                                                        let dom1Input = document.getElementById('horainiciodom');
                                                        let dom2Input = document.getElementById('horafindom');
                                                        let dom3Input = document.getElementById('alminiciodom');
                                                        let dom4Input = document.getElementById('descinidom');
                                                        let dom5Imput = document.getElementById('desfindom');
                                                        let dom6Imput = document.getElementById('almfindom');
                                                    //
                                                    const fechaSeleccionada = fechaInput.value;
                                                    const fecha = new Date(fechaSeleccionada);
                                                    let diaSemana = fecha.getDay();

                                                    switch (diaSemana) {


                                                        case 6: // Domingo
                                                            dom1Input.disabled = true;
                                                            dom2Input.disabled = true;
                                                            dom3Input.disabled = true;
                                                            dom4Input.disabled = true;
                                                            dom1Input.value = "";
                                                            dom2Input.value = "";
                                                            dom3Input.value = "";
                                                            dom4Input.value = "";
                                                            break;
                                                        case 0: // Lunes
                                                            lun1Input.disabled = true;
                                                            lun2Input.disabled = true;
                                                            lun3Input.disabled = true;
                                                            lun4Input.disabled = true;
                                                            lun1Input.value = "";
                                                            lun2Input.value = "";
                                                            lun3Input.value = "";
                                                            lun4Input.value = "";
                                                            lun5Imput.value = "";
                                                            lun6Imput.value = "";

                                                            break;
                                                        case 1: // Martes
                                                            mar1Input.disabled = true;
                                                            mar2Input.disabled = true;
                                                            mar3Input.disabled = true;
                                                            mar4Input.disabled = true;
                                                            mar1Input.value = "";
                                                            mar2Input.value = "";
                                                            mar3Input.value = "";
                                                            mar4Input.value = "";
                                                            mar5Imput.value = "";
                                                            mar6Imput.value = "";
                                                            break;
                                                        case 2: // Miercoles
                                                            mie1Input.disabled = true;
                                                            mie2Input.disabled = true;
                                                            mie3Input.disabled = true;
                                                            mie4Input.disabled = true;
                                                            mier1Input.value = "";
                                                            mier2Input.value = "";
                                                            mier3Input.value = "";
                                                            mier4Input.value = "";
                                                            mier5Imput.value = "";
                                                            mier6Imput.value = "";
                                                            break;
                                                        case 3: // Jueves
                                                            jue1Input.disabled = true;
                                                            jue2Input.disabled = true;
                                                            jue3Input.disabled = true;
                                                            jue4Input.disabled = true;
                                                            jue1Input.value = "";
                                                            jue2Input.value = "";
                                                            jue3Input.value = "";
                                                            jue4Input.value = "";
                                                            jue5Imput.value = "";
                                                            jue6Imput.value = "";
                                                            break;
                                                        case 4: // viernes
                                                            vie1Input.disabled = true;
                                                            vie2Input.disabled = true;
                                                            vie3Input.disabled = true;
                                                            vie4Input.disabled = true;
                                                            vie1Input.value = "";
                                                            vie2Input.value = "";
                                                            vie3Input.value = "";
                                                            vie4Input.value = "";
                                                            vie5Imput.value = "";
                                                            vie6Imput.value = "";
                                                            break;
                                                        case 5: // sabado

                                                            sab1Input.disabled = true;
                                                            sab2Input.disabled = true;
                                                            sab3Input.disabled = true;
                                                            sab4Input.disabled = true;
                                                            sab1Input.value = "";
                                                            sab2Input.value = "";
                                                            sab3Input.value = "";
                                                            sab4Input.value = "";
                                                            sab5Imput.value = "";
                                                            sab6Imput.value = "";
                                                            break;
                                                    }
                                                }
                                                /*funcion de reseteo inputs */
                                                function Reset() {
                                                    var ids = ["horainicio", "horafin", "alminicio", "descinilun",
                                                        "descfinlun", "almfin",
                                                        "horainiciomar", "horafinmar", "alminiciomar",
                                                        "desinimar", "descfinmar", "almfinmar",
                                                        "horainiciomie", "horafinmie", "alminiciomie",
                                                        "descinimie", "descfinmie", "almfinmie",
                                                        "horainiciojue", "horafinjue", "alminiciojue",
                                                        "descinijue", "descfinjue", "almfinjue",
                                                        "horainiciovie", "horafinvie", "alminiciovie",
                                                        "descinivie", "descfinvie", "almfinvie",
                                                        "horainiciosab", "horafinsab", "alminiciosab",
                                                        "descinisab", "descfinsab", "almfinsab",
                                                        "horainiciodom", "horafindom", "alminiciodom",
                                                        "descinidom", "descfindom", "almfindom",
                                                    ]
                                                    for (i = 0; i < ids.length; i++) {

                                                        var input = document.getElementById(ids[i]);
                                                        input.disabled = false;
                                                    }
                                                }
                                                </script>
                                            </table>
                                            <div class="form-floating  border col-md-12  mt-3 p-2">
                                                <label class="text-info" for="observaciones"><b>Ingresa tu
                                                        Observación</b></label>
                                                <textarea class="form-control" placeholder="Observaciones..."
                                                    id="observaciones"></textarea>
                                            </div>
                                        </div>
                                        <div class=" d-flex justify-content-end m-4">
                                            <a class="btn btn-sm btn-secundary mr-2"
                                                onclick="return confirm('Deseas Cancelar?')"
                                                href="{{route('mallas.index')}}">Cancelar</a>
                                            <button type="submit" class="btn btn-sm btn-info">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection