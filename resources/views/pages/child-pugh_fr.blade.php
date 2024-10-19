@extends('layouts.app')

@section('title', 'Classification Child-Pugh')

@section('description', 'La classification de Child-Pugh-Turcotte (aussi connu sous le nom de score de Child-Pugh) est un score pronostique de la cirrhose. Il a été validé pour prédire la survie des patients à 1 et 2 ans...')

@section('content')
    @include('layouts.navbar', ['active' => 'cirrhose'])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red-500 px-6 py-3 shadow">
            <div class="flex border-b border-gray-400 items-center">
                <h1 class="text-3xl leading-none text-red-500">La classification Child-Pugh</h1>
            </div>
            <p class="mt-2">La classification de Child-Turcotte-Pugh (aussi connue sous le nom de score de Child-Pugh) est un outil pronostique employé chez les patients cirrhotiques. Il a été validé pour prédire la survie des patients à 1 et 2 ans.</p>

            <p class="mt-2">Il est composé de cinq paramètres : la bilirubine, l’albumine, le temps de prothrombine (ou le RNI), la présence d’ascite et d’encéphalopathie hépatique. Une valeur de 1 à 3 points est attribuée pour chaque paramètre. La somme de ces valeurs permet d’obtenir un score permettant de classifier le degré de cirrhose en consultant l'échelle de référence. La sévérité de la cirrhose se divise en 3 classes : A, B ou C, soit légère, modérée ou avancée.</p>
            <p class="mt-2">Plus le score est élevé, plus le risque de morbidité et de mortalité associé à la cirrhose augmente.</p>

            <div class="mt-2 w-3/4 mx-auto bg-gray-100 border border-gray-500 px-4 rounded py-2 leading-none">
                <p><span class="font-medium">Score de 5 à 6 points</span> : cirrhose légère, Child-Pugh A</p>
                <p class="ml-6">Survie à un an de 100 %</p>
                <p class="mt-2"><span class="font-medium">Score de 7 à 9 points</span> : cirrhose modérée, Child-Pugh B</p>
                <p class="ml-6">Survie à un an de 80 %</p>
                <p class="mt-2"><span class="font-medium">Score de 10 à 15 points</span> : cirrhose sévère, Child-Pugh C</p>
                <p class="ml-6">Survie à un an de 45 %</p>
            </div>
            <p class="mt-4">Voici comment calculer le score :</p>
            <table>
                <thead>
                <tr class="table-header">
                    <th width="20%"></th>
                    <th width="26%">1 point</th>
                    <th width="26%">2 points</th>
                    <th width="26%">3 points</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Encéphalopathie hépatique</td>
                    <td>Absente</td>
                    <td>Légère à modérée (stade 1-2)</td>
                    <td>Sévère (stade 3-4)</td>
                </tr>
                <tr>
                    <td>Ascite</td>
                    <td>Absente</td>
                    <td>Modérée</td>
                    <td>Tendue ou réfractaire aux diurétiques</td>
                </tr>
                <tr>
                    <td>Bilirubine (µmol/L)</td>
                    <td>&lt; 35</td>
                    <td>35-50</td>
                    <td>&gt; 50</td>
                </tr>
                <tr>
                    <td>Albumine (g/L)</td>
                    <td>&gt; 35</td>
                    <td>28 à 35</td>
                    <td>&lt; 28</td>
                </tr>
                <tr>
                    <td>RNI</td>
                    <td>&lt; 1.7</td>
                    <td>1.7 à 2.2</td>
                    <td>&gt; 2.2</td>
                </tr>
                </tbody>
            </table>

            <p class="mt-2">Bien qu’elle n’ait pas été développée pour évaluer la capacité du foie à disposer des médicaments, cette classification est souvent utilisée dans les monographies pour proposer des ajustements de dose chez les patients atteints de cirrhose. La U.S. Food and Drug Administration (FDA) recommande d’utiliser ce score lors de la commercialisation de nouveaux produits.</p>

            <p class="mt-2">Les recommandations que vous trouverez à travers le site ont été émises en fonction du score Child-Turcotte-Pugh.</p>
        </div>
    </div>
    @include('layouts.footer')
@endsection
