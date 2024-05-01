from django.db import models

class Tabela(models.Model):
    id_venda = models.AutoField(primary_key=True)
    gasolina = models.TextField(max_length=255)
    litros = models.IntegerField()
    preco = models.FloatField()