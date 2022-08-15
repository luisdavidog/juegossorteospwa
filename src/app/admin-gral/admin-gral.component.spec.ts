import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AdminGralComponent } from './admin-gral.component';

describe('AdminGralComponent', () => {
  let component: AdminGralComponent;
  let fixture: ComponentFixture<AdminGralComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AdminGralComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AdminGralComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
