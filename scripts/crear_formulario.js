function crearFormularioTalleres() {
    // 1. Crear el formulario
    var form = FormApp.create('Inscripción Talleres Conecta 37');

    form.setDescription('Formulario de inscripción para los talleres del proyecto Conecta 37. Por favor, rellene los datos solicitados.')
        .setConfirmationMessage('¡Gracias por inscribirte! Hemos registrado tu solicitud.')
        .setAllowResponseEdits(true)
        .setAcceptingResponses(true);

    // 2. Añadir campo: Centro Educativo (Lista desplegable)
    var itemCentro = form.addListItem();
    itemCentro.setTitle('Centro Educativo')
        .setHelpText('Seleccione su centro educativo')
        .setRequired(true)
        .setChoiceValues([
            'CEIPS Santo Domingo (Madrid)',
            'Colegio Litterator (Madrid)',
            'IES Alcántara (Murcia)',
            'IES Cañada de las Eras (Murcia)',
            'IES Floridablanca (Murcia)',
            'IES Sangonera la Verde (Murcia)'
        ]);

    // 3. Añadir campo: Taller (Lista desplegable)
    var itemTaller = form.addListItem();
    itemTaller.setTitle('Taller')
        .setHelpText('Seleccione el taller al que desea inscribirse')
        .setRequired(true)
        .setChoiceValues([
            'Tinkercad',
            'Doblaje',
            'Escaneado 3D iPad',
            'Fotogrametría',
            'Realidad Virtual',
            'Minecraft Education',
            'Podcast',
            'Radio',
            'Matemáticas con IA',
            'Lengua con IA'
        ]);

    // 4. Añadir campo: Nombre del Responsable (Texto corto)
    var itemNombre = form.addTextItem();
    itemNombre.setTitle('Nombre del Responsable')
        .setHelpText('Nombre y apellidos del docente responsable')
        .setRequired(true);

    // 5. Añadir campo: Correo electrónico (Texto corto con validación)
    var itemEmail = form.addTextItem();
    itemEmail.setTitle('Correo electrónico')
        .setHelpText('Email de contacto')
        .setRequired(true);

    // Validación de email
    var emailValidation = FormApp.createTextValidation()
        .setHelpText('Por favor, introduce una dirección de correo electrónico válida.')
        .requireTextIsEmail()
        .build();
    itemEmail.setValidation(emailValidation);

    // 6. Añadir campo: Teléfono (Texto corto)
    var itemTelefono = form.addTextItem();
    itemTelefono.setTitle('Teléfono')
        .setHelpText('Teléfono de contacto')
        .setRequired(true);

    // 7. Añadir campo: Número de participantes (Texto corto con validación numérica)
    var itemParticipantes = form.addTextItem();
    itemParticipantes.setTitle('Número de participantes')
        .setHelpText('Indique el número estimado de alumnos que asistirán')
        .setRequired(true);

    // Validación de número (debe ser un número entero mayor que 0)
    var numberValidation = FormApp.createTextValidation()
        .setHelpText('Por favor, introduce un número válido.')
        .requireNumberGreaterThan(0)
        .build();
    itemParticipantes.setValidation(numberValidation);

    // Log de la URL del formulario para el usuario
    Logger.log('Formulario creado con éxito.');
    Logger.log('URL de edición: ' + form.getEditUrl());
    Logger.log('URL publicada: ' + form.getPublishedUrl());

    // 8. Mover el formulario a la carpeta específica
    var folderId = '1PaK-C4xtXQroHzrSbTKliORcsEBrWdRX';
    try {
        var file = DriveApp.getFileById(form.getId());
        var folder = DriveApp.getFolderById(folderId);
        file.moveTo(folder);
        Logger.log('Formulario movido a la carpeta con ID: ' + folderId);
    } catch (e) {
        Logger.log('Error al mover el formulario: ' + e.toString());
    }
}
