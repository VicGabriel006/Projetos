# Generated by Django 5.0.4 on 2024-04-28 14:19

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Posto',
            fields=[
                ('id_venda', models.AutoField(primary_key=True, serialize=False)),
                ('gasolina', models.TextField(max_length=255)),
                ('preco', models.FloatField()),
            ],
        ),
    ]
