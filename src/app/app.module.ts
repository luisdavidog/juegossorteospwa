import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AdminGralComponent } from './admin-gral/admin-gral.component';
import { AdminComponent } from './admin/admin.component';
import { TrabajadorComponent } from './trabajador/trabajador.component';
import { ClienteComponent } from './cliente/cliente.component';
import { IniciarRutaComponent } from './iniciar-ruta/iniciar-ruta.component';
import { NuevoClienteComponent } from './nuevo-cliente/nuevo-cliente.component';
import { ReportesComponent } from './reportes/reportes.component';
import { ReparacionesComponent } from './reparaciones/reparaciones.component';

@NgModule({
  declarations: [
    AppComponent,
    AdminGralComponent,
    AdminComponent,
    TrabajadorComponent,
    ClienteComponent,
    IniciarRutaComponent,
    NuevoClienteComponent,
    ReportesComponent,
    ReparacionesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
