
<form class="form-inline">
  <div class="container">
  
    <div id="valor">
      <div class="row">
        <div class="span2"> 
          <label for="persontype">Tipo de persona</label>
        </div>
         
        <div class="span10">
          <input type="radio" id="naturalPersonType" name="PT" value="Natural" v-model="personType" v-on:change="personTypeSelected"> 
          <label for="naturalPersonType">Natural</label>&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="radio" id="legalPersonType" name="PT" value="Jurídica" v-model="personType" v-on:change="personTypeSelected" >
          <label for="legalPersonType">Jurídica</label>
        </div>
      </div>
            
      <hr>
        
      <div v-if="block">
        <!-- Contenido de la página-->
        <div class="row">
          <div class="span12">
            <!-- Inicio del acordeon-->
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel1">
                    <i class="general foundicon-minus"></i>
                    Información Personal - Persona @{{personType}}</a>
                  </h4>
                </div>
                <div id="panel1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <!-- <div class="row"> -->
                    <div class="span2">
                      <label for="preidentificator">@{{preidentificator}} </label>
                    </div>

                    <div id="optionsData"></div>
                    <div id="app-7" class="span4">
                      <select id="select2" v-model= "list" v-on:change="preIdentificatorSelected">
                        <option  v-for="option in optionser" v-bind:value="option.value"> @{{ option.text }} </option>
                      </select>
                    </div>
                      <!-- <input type="text"  name="preidentificator" id="preidentificator" placeholder="">-->

                    <div class="span2">
                      <label for="identificator">@{{identificator}}</label>
                    </div>
                    
                    <div class="span4">
                      <input type="text" name="identificator" id="identificator" placeholder="Documento">
                    </div>
                    <!--</div>-->
                    
                    <!--Natural Person-->
                    <div id="naturalPerson" v-if="naturalBlock">
                      <!--<div class="row">-->
                      <div class="span2"> 
                        <label for="firstname">Primer Nombre</label>
                      </div>
                      <div class="span4">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Primer nombre">
                      </div>
                      <div class="span2">     
                        <label for="secondname">Segundo nombre</label>
                      </div>
                      <div class="span4">
                        <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Segundo nombre">
                      </div>
                    

                      <div id="apellidos">
                        <div class="span2"> 
                          <label for="lastname">Primer apellido</label>
                        </div>

                        <div class="span4">
                          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Primer apellido">
                        </div>
                        
                        <div class="span2"> 
                          <label for="surname">Segundo apellido</label>
                        </div>
                        
                        <div class="span4">
                          <input type="text" class="form-control" id="surname" name="surname" placeholder="Segundo apellido">
                        </div>
                      </div> 

                      <div id="datos">
                        <div class="span2">
                          <label for="birthdate">Fecha de nacimiento</label>
                        </div>
                        
                        <div class="span4">
                          <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Fecha de nacimiento">
                        </div>
                        
                        <div class="span2">
                          <label for="sex">Sexo</label>
                        </div>  
                        
                        <div class="span4">
                          <input type="radio" name="sex" checked>
                           <label for="sex">F</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="sex">
                           <label for="sex"> M </label>
                        </div>
                      </div>
                        
                      <div id="estadocivil">
                        <div class="span2">
                          <label for="civilstate">Estado civil</label>
                        </div>  
                        
                        <div class="span4">
                         <select name="civilState">
                         <option value="S">Soltero</option>
                         <option value="C">Casado</option>
                         <option value="V">Viudo</option>
                         <option value="D">Divorciado</option>
                         <option value="U">Unión estable</option>
                         </select>
                        </div>    
                      
                        <div class="span2">
                          <label for="instructionlevel">Nivel de instrucción</label>
                        </div>    
                        
                        <div class="span4">
                          <select name="instructionlevel">
                            <option value="S">Primaria</option>
                            <option value="C">Bachiller</option>
                            <option value="V">T.S.U</option>
                            <option value="D">Universitario</option>
                            <option value="U">Postgrado</option>
                          </select>
                        </div>
                      </div>

                      <div id="indigenousCommunity">
                        <div class="span4">
                          <label for="socialname">Pertenece a alguna comunidad indígena</label>
                        </div>
                        <div class="span2">
                           <input type="radio" name="sex" checked>
                           <label for="sex">Si</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="sex">
                           <label for="sex"> No </label>
                        </div>
                        <div class="span6">
                           <input type="text" class="form-control" id="socialname" name="socialname" placeholder="Comunidad indigena">
                        </div>
                      </div> 

                      <div id="opcn">
                        <div class="span4">
                          <label for="socialname">Pertenece a alguna organización popular</label>
                        </div>
                        <div class="span2">
                           <input type="radio" name="opn" checked>
                           <label>Si</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="opn">
                           <label> No </label>
                        </div>
                        <div class="span3">
                           <input type="text" class="form-control" id="opn" name="opn" placeholder="Organización popular">
                        </div>
                        <div class="span2">
                           <a href="#">Agregar</a>
                        </div>
                        <div class="span1">&nbsp;</div>                        

                      </div>


                    <div>
                      <div class="span4">
                       <label for="state">¿Vive en la unidad de producción?</label>
                      </div>
                      <div class="span8">
                        <input type="radio" name="isLivingN" value="Si"> 
                        <label>Si</label>&nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="radio" name="isLivingN" value="No">
                        <label>No</label>
                      </div>
                    </div> 

                      <div>
                        <div class="span2">
                          <label>¿Es propietario?</label>
                        </div>
                        <div class="span2">
                           <input type="radio" name="isOwner" checked>
                           <label>Si</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="isOwner">
                           <label> No </label>
                        </div>
                        
                        <div class="span2">
                          <label for="socialname">¿Es representante legal?</label>
                        </div>
                        <div class="span2">
                           <input type="radio" name="isLegalRepresentative" checked>
                           <label>Si</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="isLegalRepresentative">
                           <label> No </label>
                        </div>
                        <div class="span4">&nbsp;</div>                        
                      </div>                       



                    </div><!--Fin de persona Natural-->
                   
                    <!--Inicio Persona Jurídica-->
                    <div id="legalPerson" v-if="legalBlock">
                      <div id="razonsocial">
                        <div class="span2">
                          <label for="socialname">Razón social</label>
                        </div>
                        <div class="span10">
                          <input type="text" class="form-control" id="socialname" name="socialname" placeholder="Razón social">
                        </div>
                      </div>
                    </div> <!--Fin de persona jurídica--> 
                  </div>  <!--Fin panel body-->
                </div> <!--Fin panel 1-->
              </div> <!-- Fin panel default-->   

           
              <!--Dueños de la tierra-->
              <div v-if="hasAdicionalOwner">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#paneld2">
                      <i class="general foundicon-plus"></i>Dueños/productores(adicionales) de la tierra </a>
                    </h4>
                  </div>
                  <div id="paneld2" class="panel-collapse collapse">
                    <div class="panel-body">
                     <div>
                        <div class="span2"> 
                          <label for="firstname">Nacionalidad</label>
                        </div>
                        
                        <div class="span4">
                          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nacionalidad">
                        </div>
                        
                        <div class="span2">     
                          <label for="secondname">Cédula o pasaporte</label>
                        </div>
                        
                        <div class="span4">
                          <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Cédula o pasaporte">
                        </div>
                      </div>

                      <div>
                        <div class="span2"> 
                          <label for="firstname">Primer Nombre</label>
                        </div>
                        
                        <div class="span4">
                          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Primer nombre">
                        </div>
                        
                        <div class="span2">     
                          <label for="secondname">Segundo nombre</label>
                        </div>
                        
                        <div class="span4">
                          <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Segundo nombre">
                        </div>
                      </div>

                      <div id="apellidos">
                        <div class="span2"> 
                          <label for="lastname">Primer apellido</label>
                        </div>

                        <div class="span4">
                          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Primer apellido">
                        </div>
                        
                        <div class="span2"> 
                          <label for="surname">Segundo apellido</label>
                        </div>
                        
                        <div class="span4">
                          <input type="text" class="form-control" id="surname" name="surname" placeholder="Segundo apellido">
                        </div>
                      </div>
                      <div id="datos">
                        <div class="span2">
                          <label for="birthdate">Fecha de nacimiento</label>
                        </div>
                        
                        <div class="span4">
                          <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Fecha de nacimiento">
                        </div>
                        
                        <div class="span2">
                          <label for="sex">Sexo</label>
                        </div>  
                        
                        <div class="span4">
                          <input type="radio" name="sex" checked>
                           <label for="sex">F</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="sex">
                           <label for="sex"> M </label>
                        </div>
                      </div>
                        
                      <div id="estadocivil">
                        <div class="span2">
                          <label for="civilstate">Estado civil</label>
                        </div>  
                        
                        <div class="span4">
                         <select name="civilState">
                         <option value="S">Soltero</option>
                         <option value="C">Casado</option>
                         <option value="V">Viudo</option>
                         <option value="D">Divorciado</option>
                         <option value="U">Unión estable</option>
                         </select>
                        </div>    
                      

                      
                        <div class="span2">
                          <label for="instructionlevel">Nivel de instrucción</label>
                        </div>    
                        
                        <div class="span4">
                          <select name="instructionlevel">
                            <option value="S">Primaria</option>
                            <option value="C">Bachiller</option>
                            <option value="V">T.S.U</option>
                            <option value="D">Universitario</option>
                            <option value="U">Postgrado</option>
                          </select>
                        </div>
                      </div> 

                      <div id="contactIndigenousCommunity">
                        <div class="span4">
                          <label for="socialname">Pertenece a alguna comunidad indígena</label>
                        </div>
                        <div class="span2">
                           <input type="radio" name="sex" checked>
                           <label for="sex">Si</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="sex">
                           <label for="sex"> No </label>
                        </div>
                        <div class="span6">
                           <input type="text" class="form-control" id="socialname" name="socialname" placeholder="Comunidad indigena">
                        </div>
                      </div>

                      <div id="opc">
                        <div class="span4">
                          <label for="socialname">Pertenece a alguna organización popular</label>
                        </div>
                        <div class="span2">
                           <input type="radio" name="op" checked>
                           <label for="sex">Si</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="op">
                           <label for="sex"> No </label>
                        </div>
                        <div class="span3">
                           <input type="text" class="form-control" id="socialname" name="socialname" placeholder="Organización popular">
                        </div>
                        <div class="span2">
                           <a href="#">Agregar</a>
                        </div>
                        <div class="span1">&nbsp;</div>                        

                      </div>


                    <div>
                      <div class="span4">
                       <label for="state">¿Vive en la unidad de producción?</label>
                      </div>
                      <div class="span8">
                        <input type="radio" name="isLivingD" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="isLivingD" value="No">
                        <label>No</label>
                      </div>
                    </div> 




                      <div>
                        <div class="span2">
                          <label for="socialname">¿Es propietario?</label>
                        </div>
                        <div class="span2">
                           <input type="radio" name="isOwner" checked>
                           <label>Si</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="isOwner">
                           <label> No </label>
                        </div>
                        <div class="span2">
                          <label for="socialname">¿Es representante legal?</label>
                        </div>
                        <div class="span2">
                           <input type="radio" name="isLegalRepresentative" checked>
                           <label>Si</label>
                         &nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="radio" name="isLegalRepresentative">
                           <label> No </label>
                        </div>
                        <div class="span4">&nbsp;</div>
                      </div>                       


                      <div>
                        <div class="span12">
                         <a href="#">Agregar</a>
                        </div>
                      </div> 

                    </div>
                  </div>
                </div>
              </div>
              <!--Fin dueños de la tierra-->

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel2">
                    <i class="general foundicon-plus"></i>Datos de contacto</a>
                  </h4>
                </div>
                <div id="panel2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div>
                      <div class="span2">
                        <label for="homephone">Teléfono local</label>
                      </div>
                      
                      <div class="span4">
                        <input type="text" class="form-control" id="homephone" name="homephone" placeholder="Teléfono local">
                      </div>
                      
                      <div class="span2">
                        <label for="celphone">Teléfono celular</label>
                      </div>
                      
                      <div class="span4">
                        <input type="text" class="form-control" id="celphone" name="celphone" placeholder="Teléfono celular">
                      </div>
                    </div>  
                    
                    <!--Legal person-->
                    <div id="legalPerson" v-if="legalBlock">
                      <div>
                        <div class="span2">
                          <label for="homephone2">Teléfono local 2</label>
                        </div>
                    
                        <div class="span4">
                          <input type="text" class="form-control" id="homephone2" name="homephone2" placeholder="Teléfono local 2">
                        </div>
                    
                        <div class="span2">
                          <label for="celphone">Teléfono celular 2</label>
                        </div>
                    
                        <div class="span4">
                            <input type="text" class="form-control" id="delphone2" name="celphone2" placeholder="Teléfono celular 2">
                        </div>
                      </div>
                    </div> 
                  <!--End Legal Person-->

                    
                    <hr>


                    <div class="divider"></div>
                    <div>
                      <div class="span2">
                        <label for="email">Redes sociales</label>
                      </div>
                      <div class="span4">
                        <select v-model="selectedNetwork" multiple>
                          <option>Twitter</option>
                          <option>Facebook</option>
                          <option>Instagram</option>
                          <option>Whatsapp</option>
                        </select>
                        <br>
                        
                      </div>

                      <div class="span6">&nbsp;</div>

                  </div>
                  <div class="span12">
                  <span>Redes  @{{ selectedNetwork }}</span>
                  </div>



                    
                    <div>
                      <div class="span2">
                        <label for="state">Estado</label>
                      </div>

                      <div class="span4">
                          <input type="text" class="form-control" id="state" name="state" placeholder="Estado">
                      </div>
                    

                    
                      <div class="span2">
                        <label for="state">Ciudad</label>
                      </div>
                      <div class="span4">
                          <input type="text" class="form-control" id="ity" name="city" placeholder=Ciudad>
                      </div>
                    </div>

                    <div>
                      <div class="span2">
                        <label for="state">Municipio</label>
                      </div>
                      <div class="span4">
                          <input type="text" class="form-control" id="state" name="state" placeholder="Municipio">
                      </div>
                    

                    
                      <div class="span2">
                        <label for="state">Parroquia</label>
                      </div>
                      <div class="span4">
                          <input type="text" class="form-control" id="state" name="state" placeholder="Parroquia">
                      </div>
                    </div>

                    <div>
                      <div class="span2">
                       <label for="state">Dirección</label>
                      </div>
                      <div class="span4">
                       <textarea type="text" class="form-control" id="address" name="address" placeholder="Dirección">
                       </textarea>
                      </div>

                      <div class="span2">
                        <label for="email">Email</label>
                      </div>
                      
                      <div class="span4">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
                    
                    </div>


                      <hr>



                    <!--Datos de contacto--> 
                    <div>
                      <div class="span12">
                       <h5>Información de contactos</h5>
                      </div>
                    </div> 

                    <div>
                      <div class="span2"> 
                        <label for="firstname">Nacionalidad</label>
                      </div>
                      
                      <div class="span4">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nacionalidad">
                      </div>
                      
                      <div class="span2">     
                        <label for="secondname">Cédula o pasaporte</label>
                      </div>
                      
                      <div class="span4">
                        <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Cédula o pasaporte">
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label for="firstname">Primer Nombre</label>
                      </div>
                      
                      <div class="span4">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Primer nombre">
                      </div>
                      
                      <div class="span2">     
                        <label for="secondname">Segundo nombre</label>
                      </div>
                      
                      <div class="span4">
                        <input type="text" class="form-control" id="secondname" name="secondname" placeholder="Segundo nombre">
                      </div>
                    </div>

                    <div id="apellidos">
                      <div class="span2"> 
                        <label for="lastname">Primer apellido</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Primer apellido">
                      </div>
                      
                      <div class="span2"> 
                        <label for="surname">Segundo apellido</label>
                      </div>
                      
                      <div class="span4">
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Segundo apellido">
                      </div>
                    </div>

                    <div id="apellidos">
                      <div class="span2"> 
                        <label for="lastname">Teléfono</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="contactPhone" name="contactPhone" placeholder="Teléfono de contacto">
                      </div>
                      
                      <div class="span2"> 
                        <label for="surname">Relación</label>
                      </div>
                      
                      <div class="span4">
                        <input type="text" class="form-control" id="familiarRelation" name="familiarRelation" placeholder="Familiar/otro">
                      </div>
                    </div>


                    
                    <div>
                      <div class="span12">
                        <a href="#">Agregar</a>
                      </div>
                    </div>                    
                    <!--Fin datos contacto-->
                  </div>
                </div>
              </div>

              <!--Información de la certificación previa (Runoppa anterior)-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel6">
                    <i class="general foundicon-plus"></i>Certificación previa</a>
                  </h4>
                </div>
                <div id="panel6" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div id="certificacion1">
                      <div class="span2"> 
                        <label for="lastname">Serial</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial">
                      </div>

                      <div class="span2"> 
                        <label>Estado</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="statuscertificate" name="statuscertificate" placeholder="Estado">
                      </div>
                    </div>

                    <div id="certificacion2">
                      <div class="span2"> 
                        <label>Fecha emisión</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="issuedate" name="issuedate" placeholder="fecha emisión">
                      </div>

                      <div class="span2"> 
                        <label>Fecha expedición</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="expdate" name="expdate" placeholder="fecha expedición">
                      </div>
                    </div>                                  
                  </div>
                </div>
              </div>

              <!--Información de la unidad de producción-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#panel8">
                    <i class="general foundicon-plus"></i>Unidad de producción</a>
                  </h4>
                </div>
                <div id="panel8" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div>
                      <div class="span2"> 
                        <label for="lastname">Tipo documento</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="documenttype" name="documenttype" placeholder="Tipo de documento">
                      </div>

                      <div class="span2"> 
                        <label for="surname">Nro documento tierra</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="docnumber" name="docnumber" placeholder="Nro. Documento de tierra">
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label for="lastname">Nombre</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="unityname" name="unityname" placeholder="Nombre de la unidad">
                      </div>

                      <div class="span2"> 
                        <label for="surname">Total superficie</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="totalsurface" name="totalsurface" placeholder="Total superficie (km2)">
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label for="lastname">Superficie usable</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="usablesurface" name="usablesurface" placeholder="Superficie usable (km2)">
                      </div>

                      <div class="span2"> 
                        <label>Superficie usada</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="usedsurface" name="usedsurface" placeholder="Superficie usada (km2)">
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label for="lastname">Tipo de tenencia</label>
                      </div>

                      <div class="span4">
                        <input type="text" class="form-control" id="usablesurface" name="usablesurface" placeholder="Superficie usable (km2)">
                      </div>

                      <div class="span2"> 
                        <label>--</label>
                      </div>

                      <div class="span4">
                        ---
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label>Capac. exportación</label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="export" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="export" value="No">
                        <label>No</label>
                      </div>

                      <div class="span2"> 
                        <label>Nec. importación</label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="import" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="import" value="No">
                        <label>No</label>
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label for="lastname">Dep. control calidad</label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="qualitydpt" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="qualitydpt" value="No">
                        <label>No</label>
                      </div>

                      <div class="span2"> 
                        <label>Dep. investigación</label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="investigatedpt" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="investigatedpt" value="No">
                        <label>No</label>
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label>Plan piloto</label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="pilotplan" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="pilotplan" value="No">
                        <label>No</label>
                      </div>

                      <div class="span2"> 
                        <label>Part. comunidad</label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="community" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="community" value="No">
                        <label>No</label>
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label>Sica</label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="sica" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="sica" value="No">
                        <label>No</label>
                      </div>

                      <div class="span2"> 
                        <label>Sunagro</label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="sunagro" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="sunagro" value="No">
                        <label>No</label>
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label>¿Se encuentra adscrita a algún organismo? </label>
                      </div>

                      <div class="span4">
                        <input type="radio" name="agency" value="Si"> 
                        <label>Si</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="agency" value="No">
                        <label>No</label>
                      </div>

                      <div class="span6"> 
                        <label for="surname">&nbsp;</label>
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label>Servicios</label>
                      </div>
                      <div class="span4">
                        <select v-model="selectedServices" multiple>
                          <option>Agua potable</option>
                          <option>Agua servidas</option>
                          <option>Telefonía celular</option>
                          <option>Transporte público</option>
                          <option>Telefonía fija</option>
                          <option>Vías asfaltadas</option>
                          <option>Vías por asfaltar</option>
                          <option>Internet</option>
                        </select>
                      </div>

                      <div class="span2">     
                         <label for="secondname">Transporte</label>
                      </div>

                      <div class="span4">
                        <select v-model="selectedTransport" multiple>
                          <option>Carro</option>
                          <option>Camioneta</option>
                          <option>Pickup</option>
                          <option>Camión</option>
                        </select>
                        
                      </div>
                    </div>

                    <div>
                      <div class="span6">
                        <span>@{{ selectedServices }}</span>
                      </div> 
                      <div class="span6">
                        <span>@{{ selectedTransport }}</span>               
                      </div>
                    </div>
                    <div>
                      <div class="span2"> 
                        <label for="firstname">Maquinaria</label>
                      </div>

                      <div class="span4">
                        <select v-model="selectedMachine" multiple>
                          <option>Máquina1</option>
                          <option>Máquina2</option>
                          <option>Máquina3</option>
                        </select>
                      </div>

                      <div class="span2">     
                        <label for="secondname">Edificios</label>
                      </div>

                      <div class="span4">
                        <select v-model="selectedBuilding" multiple>
                          <option>Edificio 1</option>
                          <option>Edificio 2</option>
                          <option>Edificio 3</option>
                        </select>
                      </div>
                    </div>

                    <div>
                      <div class="span6">
                        <span>@{{ selectedMachine }}</span>
                      </div>
                      <div class="span6">
                          <span>@{{ selectedBuilding }}</span>                
                      </div>
                    </div>


                    <div>
                      <div class="span2"> 
                        <label for="firstname">Problemas frecuentes</label>
                      </div>

                      <div class="span4">
                        <select v-model="selectedTroubles" multiple>
                          <option>Hurto</option>
                          <option>Incendio</option>
                          <option>Inundación</option>
                          <option>Sequía</option>
                        </select>
                      </div>

                      <div class="span2"> 
                        <label for="firstname">Principal fuente de agua</label>
                      </div>

                      <div class="span4">
                        <select v-model="selectedWater" multiple>
                          <option>Acueducto</option>
                          <option>Aljibe</option>
                          <option>Laguna</option>
                          <option>Manantial</option>
                          <option>Sistema de riego</option>
                          <option>Pozo comunitario</option>
                          <option>Planta de tratamiento</option>
                          <option>Quebrada</option>
                          <option>Río</option>
                        </select>
                      </div>
                    </div>

                    <div>
                      <div class="span6">
                        <span>@{{ selectedTroubles }}</span>
                      </div>
                      <div class="span6">
                          <span>@{{ selectedWater }}</span>                
                      </div>
                    </div>

                    <div>
                      <div class="span2"> 
                        <label for="firstname">Vialidad agrícola</label>
                      </div>

                      <div class="span4">
                        <select v-model="selectedVia" multiple>
                          <option>Asfaltada</option>
                          <option>Garzón</option>
                          <option>Porces de asfalto</option>
                          <option>Tierras</option>
                          <option>Concreto</option>
                          <option>Otro</option>
                        </select>
                      </div>

                      <div class="span2"> 
                        <label for="firstname">Destino de la producción</label>
                      </div>

                      <div class="span4">
                        <select v-model="selectedDestiny" multiple>
                          <option>Autoconsumo</option>
                          <option>Mercado</option>
                          <option>Intermedio</option>
                          <option>A puerta de granja</option>
                          <option>Industria</option>
                          <option>Otro</option>
                        </select>
                      </div>
                    </div>



                    <div>
                      <div class="span6">
                        <span>@{{ selectedVia }}</span>
                      </div>
                      <div class="span6">
                          <span>@{{ selectedDestiny }}</span>                
                      </div>
                    </div>

                    <div>
                      <div class="span12">
                        <span> Tipo de sector: &nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="sectorVegetal" value="vegetal" v-model="sectorVegetal" v-on:click="vegetalSelected">Vegetal&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="sectorPecuario" value="pecuario" v-model="sectorPecuario" v-on:click="pecuarioSelected">Pecuario&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" name="sectorAgroIndustria" value="agroIndustria" v-model="sectorAgroIndustria" v-on:checked="agroIndustriaSelected">Agroindustria
                         </span>
                      </div>
                    </div> 

                    <!--Inicio sector vegetal--> 
                    <div v-if="vegetalBlock">                  
                      <div>
                        <div class="span2"> 
                          <label for="surname">Método Riego</label>
                        </div>

                        <div class="span4">
                          <select v-model="selectedIrigation" multiple>
                            <option>Aspersión</option>
                            <option>Bombeo mecánico</option>
                            <option>Goteo</option>
                            <option>Gravedad</option>
                            <option>Microaspersión</option>
                            <option>No posee</option>
                          </select>
                        </div>

                        <div class="span2"> 
                          <label for="surname">Capacidad Riego</label>
                        </div>

                        <div class="span4">
                          <input type="text" class="form-control" id="docnumber" name="docnumber" placeholder="Capacidad de Riego (Hect)">
                        </div>
                      </div> 
                      
                      <div>
                        <div class="span2"> 
                          <label for="lastname">Tipo ambiente</label>
                        </div>

                        <div class="span4">
                          <input type="radio" name="environmentType" value="protected"> 
                          <label>Cultivo protegido</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="radio" name="environmentType" value="unprotected">
                          <label>Cielo abierto</label>
                        </div>

                        <div class="span2"> 
                          <label for="lastname">Ciclo</label>
                        </div>

                        <div class="span4">
                          <input type="radio" name="cycle" value="short"> 
                          <label>Corto</label>&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="radio" name="cycle" value="semishort">
                          <label>SemiPermanente</label>
                          <input type="radio" name="cycle" value="long">
                          <label>Permanente</label>                          
                        </div>
                      </div>
                        <br/><hr>
                      <!--Bloques de ciclos cortos, permaente o semipermanente-->  
                      <div>
                        <div>
                          <div class="span2"> 
                            <label for="lastname">Nombre</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">    
                          </div>

                          <div class="span2"> 
                            <label for="lastname">Superficie Hect</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">
                          </div>
                        </div>

                        <div>
                          <div class="span2"> 
                            <label for="lastname">Producción últ cosecha</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">    
                          </div>

                          <div class="span2"> 
                            <label for="lastname">Año Ult. cosecha</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">
                          </div>
                        </div>                      

                        <div>
                          <div class="span2"> 
                            <label for="lastname">Mes y año de siembra</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">    
                          </div>

                          <div class="span2"> 
                            <label for="lastname">Tipo</label>
                          </div>

                          <div class="span4">
                            <input type="radio" name="cycle" value="short"> 
                            <label>Intención de siembra</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="cycle" value="semishort">
                            <label>Sembrado</label>
                          </div>
                        </div>                      
                      </div>
                      <!--Ciclo semipermanente/permanente-->
                                            <div>
                        <div>
                          <div class="span2"> 
                            <label for="lastname">Nombre</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">    
                          </div>

                          <div class="span2"> 
                            <label for="lastname">Superficie Hect</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">
                          </div>
                        </div>

                        <div>
                          <div class="span2"> 
                            <label for="lastname">Año fundación</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">    
                          </div>

                          <div class="span2"> 
                            <label for="lastname">Año Renovación</label>
                          </div>

                          <div class="span4">
                            <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Año renovación">
                          </div>
                        </div>                      

                        <div>

                          <div class="span2"> 
                            <label for="lastname">Tipo</label>
                          </div>

                          <div class="span4">
                            <input type="radio" name="permanentType" value="intencion"> 
                            <label>Intención de siembra</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="permanentType" value="plantados">
                            <label>Plantados</label>
                          </div>

                          <div class="span6"> 
                            &nbsp;
                          </div>

                        </div>                      
                      </div>

                    </div>              
                    <!--Fin sector vegetal-->

                    <!--Inicio sector pecuario--> 
                    <div v-if="pecuarioBlock">                  
                      <div>
                        <div class="span2"> 
                          <label for="lastname">Modalidad de producción</label>
                        </div>

                        <div class="span4">
                          <input type="text" class="form-control" id="documentType" name="documenttype" placeholder="Ciclo">
                        </div>

                        <div class="span2"> 
                          <label for="surname">Mét. Irrigación</label>
                        </div>

                        <div class="span4">
                          <input type="text" class="form-control" id="docnumber" name="docnumber" placeholder="Método de irrigación">
                        </div>
                      </div>

                      <div>
                        <div class="span2"> 
                          <label for="lastname">Tipo ambiente</label>
                        </div>

                        <div class="span4">
                          <input type="text" class="form-control" id="documenttype" name="documenttype" placeholder="Tipo de ambiente">
                        </div>

                        <div class="span2"> 
                          <label for="surname">Cap. Irrigación</label>
                        </div>

                        <div class="span4">
                          <input type="text" class="form-control" id="docnumber" name="docnumber" placeholder="Capacidad de irrigación">
                        </div>
                      </div>  
                    </div>                  
                    <!--Fin sector pecuario-->


                  </div><!--Fin panel body-->
                </div>
              </div>  
            </div><!--Fin acordeon-->
          </div> <!--Fin span12 del row del acordeon-->
        </div> <!--Fin row del acordeon-->
        <hr>

        <div class="form-group">
          <div class="span12">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </div>
      </div><!--Fin del block-->
    </div> <!--Fin del valor-->
  </div><!--Fin del container-->
</form>