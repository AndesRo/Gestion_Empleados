# GranTurismo24 - Sistema de Gestión de Empleados

GranTurismo24 es una aplicación diseñada para gestionar la información de los empleados en la empresa GranTurismo24. Permite agregar empleados, calcular su antigüedad, agruparlos por departamentos y más. 

## Características

- **Agregar Empleados**: Registra nuevos empleados con nombre, salario, fecha de ingreso y departamento.
- **Calcular Antigüedad**: Calcula la antigüedad de los empleados en años a partir de su fecha de ingreso.
- **Agrupar por Departamentos**: Agrupa empleados por departamentos para una mejor organización.
- **Contador de Salarios**: Cuenta el número de empleados que tienen el mismo salario.
- **Calcular Bonificaciones**: Calcula bonificaciones basadas en un porcentaje del salario.
- **Seleccionar Premio Aleatorio**: Selecciona aleatoriamente un empleado para un premio.

## Instalación

Para instalar y usar este paquete, sigue los siguientes pasos:

1. Clona el repositorio:

   ```sh
   git clone https://github.com/tu_usuario/gran_turismo24.git

   Navega al directorio del proyecto:
cd gran_turismo24

   Instala el paquete usando pip:

   pip install .

   Uso
Aquí hay un ejemplo de cómo usar la aplicación:

from gran_turismo24.gestion_empleados import (
    agregar_empleado,
    mostrar_informacion_empleado,
    mostrar_empleados_por_departamento,
    mostrar_contador_salarios,
    calcular_bonificacion,
    seleccionar_empleado_para_premio
)

# Agregar empleados
agregar_empleado("Juan Pérez", 50000, "2015-06-01", "Ventas")
agregar_empleado("María García", 60000, "2018-09-15", "Marketing")
agregar_empleado("Carlos Sánchez", 55000, "2016-03-10", "Ventas")

# Mostrar información de los empleados
mostrar_informacion_empleado("Juan Pérez")
mostrar_informacion_empleado("María García")

# Mostrar empleados agrupados por departamento
mostrar_empleados_por_departamento()

# Mostrar contador de salarios
mostrar_contador_salarios()

# Calcular una bonificación
salario = 50000
porcentaje = 5
bonificacion = calcular_bonificacion(salario, porcentaje)
print(f"Bonificación del {porcentaje}% sobre un salario de {salario}: {bonificacion}")

# Seleccionar aleatoriamente un empleado para un premio
seleccionar_empleado_para_premio()

Contribución
Si deseas contribuir a este proyecto, por favor sigue estos pasos:

Haz un fork del repositorio.
Crea una rama nueva (git checkout -b feature/nueva-funcionalidad).
Realiza tus cambios y haz commit (git commit -am 'Añadir nueva funcionalidad').
Haz push a la rama (git push origin feature/nueva-funcionalidad).
Abre un Pull Request.


Licencia
Este proyecto está licenciado bajo la Licencia MIT. Para más detalles, consulta el archivo LICENSE.

GranTurismo24 - Sistema de Gestión de Empleados
Desarrollado por Andres Romero

### 3. Construir el Paquete

Navega al directorio principal del proyecto (`GranTurismo24/`) y ejecuta los siguientes comandos:

```sh
python setup.py sdist bdist_wheel



Este `README.md` incluye una descripción del proyecto, las características principales, instrucciones de instalación, un ejemplo de uso, y directrices para la contribución y la licencia. Puedes modificarlo según tus necesidades específicas y añadir más detalles si es necesario.

