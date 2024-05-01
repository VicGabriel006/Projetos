from django.urls import path
from app_post_gasolina import views

urlpatterns = [
    path('', views.home, name='home'),
    path('posto/',views.posto,name='combustivel')
]
