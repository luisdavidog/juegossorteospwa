import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IniciarRutaComponent } from './iniciar-ruta.component';

describe('IniciarRutaComponent', () => {
  let component: IniciarRutaComponent;
  let fixture: ComponentFixture<IniciarRutaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ IniciarRutaComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IniciarRutaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
