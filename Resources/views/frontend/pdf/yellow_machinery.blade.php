<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <meta name="description" content="@setting('core::site-description')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Certificado de Vehiculo - Eje Satelital</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        @page {
            /* margin-left: '2.54cm'; */
            /* margin-right:'2.54cm'; */
            margin-bottom: 1px;
            /* padding-right:'2.54cm'; */

        }

        body {
            font-family: 'Time Roman';
            font-size: 14px;
            text-align: justify;
            line-height: 19px;
        }

        p {
            margin-bottom: 0.5rem;
        }
        .table{
            font-size: 13px;
        }
    </style>
</head>
<body>
<div class="content pl-2 pr-5">
    <div class="row">
        <div class="col-6">
            <img src="{{Theme::url('images/logo-cer.jpg')}}" alt="Eje Satelital" style="width: 370px">
        </div>
    </div>
        <div class="col-12">
            <p class="mt-1">
                Pereira, {{$document->created_at->isoFormat('D [de] MMMM [de] YYYY')}} <br>
                <strong>Remitente:</strong> {{$document->config->account->nameSender?? ''}} <br>
                <strong>CC/NIT:</strong> {{$document->config->account->idSender?? ''}} <br>
            </p>
            <p class="mt-2">
                <strong>
                    DIRIGIDO A: {{$document->config->account->addressee ?? 'A QUIEN PUEDA INTERESAR'}}
                </strong>
            </p>
            <h5 class="mt-3" style="text-align: center; font-weight: bold">VINCULACIÓN A PLATAFORMA DE RASTREO
                SATELITAL</h5>
            <p class="mt-3">
                Mediante la presente, hacemos constancia de la instalación y vinculación a nuestra Plataforma de Rastreo Satelital - Eje Satelital S.A.S.
            </p>
            <p>
                La anterior ha sido efectuada en la máquina relacionada a continuación:
            </p>
            <table class="table table-sm ">
                <tbody class="justify-content-center align-items-center text-center">
                    <tr>
                        <th style="width: 250px">
                            PLACA
                        </th>
                        <td> {{$document->config->vehicle->name??''}}</td>
                    </tr>
                    <tr>
                        <th style="width: 250px">
                            IMEI
                        </th>
                        <td> {{$document->config->vehicle->imei??''}}</td>
                    </tr>
                    <tr>
                        <th style="width: 250px">
                            LINEA
                        </th>
                        <td> {{$document->config->vehicle->model??''}}</td>
                    </tr>
                    <tr>
                        <th style="width: 250px">
                            MARCA
                        </th>
                        <td> {{$document->config->vehicle->brand??''}}</td>
                    </tr>
                    <tr>
                        <th style="width: 250px">
                            SERIAL DEL MOTOR
                        </th>
                        <td> {{$document->config->vehicle->s_motor??''}}</td>
                    </tr>
                    <tr>
                        <th style="width: 250px">
                            SERIAL DEL CHASIS
                        </th>
                        <td> {{$document->config->vehicle->s_chassis??''}}</td>
                    </tr>
                </tbody>
            </table>
            <p>
                Usando como dispositivo de Hardware una unidad con módulo chip integrado GPS con número IMEI
                <strong>{{$document->config->vehicle->imei??''}}</strong> y Serial:
                <strong>
                    {{
                        !empty($document->config->vehicle->serial)
                            ? $document->config->vehicle->serial
                            : (
                                $document->config->vehicle->type == 'maquinaria'
                                    ? substr($document->config->vehicle->imei, -10, -1)
                                    : ($document->config->vehicle->type == 'maquinaria2'
                                        ? substr($document->config->vehicle->imei, -9)
                                        : '')
                            )
                    }}
                </strong> para Transmisión Satelital enviando GPRS con cobertura nacional bajo el siguiente usuario para efectos de login en la plataforma:
                información a través de {{$document->config->account->email??'N/A'}} y la contraseña suministrada a dicho correo.
            </p>

                <p class="mt-2">
                    La vigencia y autenticidad de este certificado puede verificarse mediante el correo electrónico info@ejesatelital.com o en la línea telefónica (+57) 300 912 2995.
                    Además, damos constancia de que el suscrito se encuentra activo en el momento de la expedición de este documento.
                </p>
                @php
                    use Carbon\Carbon;
                    $fecha = Carbon::parse($document->created_at)->addMonth()->day(5)->isoFormat('D [de] MMMM [de] YYYY');
                @endphp
                <p>
                    <strong>El presente documento tendrá validez hasta el {{$fecha}}.</strong>
                </p>
            <p>
                Cordialmente,
            </p>
        </div>

        <div class="col-12 pt-2 d-flex justify-content-between align-items-center mt-2">
            <img src="{{Theme::url('images/firma-jf.png')}}" alt="Firma" style="width: 200px;" class="img-fluid">
            <img src="{{Theme::url('images/sello.jpg')}}" alt="Sello" style="width: 100px;" class="img-fluid float-right">
        </div>

        <div class="col-12">
            <p class="m-0">Cristian Jimenez</p>
            <p class="m-0">Director de Operaciones - Eje Satelital</p>
            <p class="m-0">PBX: (+57) 300 912 2995</p>
            <p class="m-0"><a href="https://www.ejesatelital.com"><u>www.ejesatelital.com</u></a></p>
        </div>
        <div class="col-12 mt-2">
            <strong>
                <p class="text-muted"  style="font-size: 11px">*El presente documento ha sido generado de manera automática a través de <u>https://certificados.ejesatelital.com</u>,
                    los datos del remitente y destinatario han sido proporcionados por el usuario en el momento de su creación.</p>
            </strong>
        </div>
        <div class="col-12 mt-3 text-center" style="font-size: 12px">
            <p class="text-secondary font-weight-bold m-0">Soporte Tecnico Eje Satelital S.A.S. Av. 30 de Av. Las Americas No 81-02 Corales NIT: 34066000-8</p>
                <p class="text-secondary font-weight-bold m-0">Pereira - Risaralda</p>
        </div>
    </div>
</div>
</body>
</html>
