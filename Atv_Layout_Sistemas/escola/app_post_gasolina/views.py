from django.shortcuts import render
from .models import Tabela

def home(request):
    return render(request, 'posto/index.html')

def posto(request):
    if request.method == 'POST':
        nova_venda = Tabela()
        nova_venda.gasolina = request.POST.get('gasolina')
        nova_venda.litros = request.POST.get('litros')
        nova_venda.preco = request.POST.get('preco')
        nova_venda.save()

    postos = {
        'postos': Tabela.objects.all()
    }

    return render(request, 'posto/tabelas.html', postos)