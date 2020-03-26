<div class="page-header">
	<h1>Ventilación</h1>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Definicón de SDRA
</button>
<div class="collapse" id="collapseExample">
	<div class="well">
		<h3>Definición</h3>
		<ul>
			<li> Insuficiencia respiratoria aguda que evoluciona
			por menos de una semana.</li>
			<li>- Opacidades bilaterales en imágenes torácicas
			(vidrio esmerilado multifocal bilateral,
			predominantemente periférico, imágenes de
			neumonía organizada).</li>
			<li>- Ausencia de argumentos para un edema
			hidrostático predominante.</li>
			<li>- Hipoxemia con una relación
			Pa02 (mmHg) / F102 (0.21 a 1) <300 para una presión
			conjunto espiratorio positivo (PEEP) a 5 cm H20
			Etapas de gravedad (criterios de Berlín).</li>
		</ul>
		<h3>Gravedad</h3>
		<p>3 etapas de gravedad definidas dependiendo de la hipoxemia.</p>
		<img src="<?= Yii::$app->request->BaseUrl ?>/images/no_demora_la_intubacion.JPG" width="100%" alt="">
		<p>Fuente: ayudas cognitivas SFAR - Desglose del SDRA (COVID-19)</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Ventilación protectora
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<p>En la ventilación mecánica en fase aguda en modo VAC, tipo ultraprotector con volumen actual a 6 ml / kg de peso ideal (consulte el peso ideal anexo según el tamaño).</p>
		<ul>
			<li> Reclutamiento por PEEP set de 6-20 cmH2O.</li>
			<li> Monitorización de plataforma <28 cmH2O y
			  presión de conducción <15 cmH2O.</li>
			<li> FiO2 mínimo establecido para SaO2> 90% SaO2 y
			  paO2> 60 mmHg.</li>
			<li> Frecuencia entre 20 - 34 ciclos / min dependiendo
			  de la gasometría arterial para pH> 7.3.</li>
			<li> Decúbito ventral en pacientes con P / F <100.</li>
			<li> Si NO hay indicación: NO prueba y monitoreo de
			  metahemoglobinemia si el uso es prolongado.</li>
			<li> Controles de gas.</li>
		</ul>
		<p>Fuente: ayudas cognitivas SFAR - Desglose del SDRA (COVID-19)</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> ARDS moderado a severo P/F < 150
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<ul>
			<li> CURARIZACIÓN CONTINUA durante las primeras
			48 horas (Cis-atracurium o atracurium) + sedación
			profunda (de acuerdo con el protocolo de servicio,
			promueve el monitoreo de BIS).</li>
			<li> Realice una sesión diaria de DECUBITUS
			VENTRAL siempre que P / F <150.</li>
			
		</ul>
		<p>Fuente: ayudas cognitivas SFAR - Desglose del
			SDRA (COVID-19)</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Pplat > 30cmH2O
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<p>Si la presión máxima también es alta → verifique la
		ausencia de obstrucción de la sonda, circuito de
		asimetría auscultatoria del codo (indicativo de
		neumotórax o intubación selectiva).</p>

		<p>Verifique que la sedación (+/- curarización) sea
		óptima + bolo de curare (repita solo si la respuesta).</p>

		<p>Si no hay mejora después de verificar los 2 puntos
		anteriores → en orden:</p>
		<ul>
			<li> Baje el Vt a 5 ml / Kg PIT</li>
			<li> Si no mejora, baje a 4 ml / Kg PIT</li>
			<li> Si no hay ningún efecto, baje la PEEP en pasos de
			2 cmH2O hasta un Pplat <30 cmH2O.</li>
		</ul>
		<p>Discutir la posición de decúbito prono si no se
		prueba (posible mejora en el volumen pulmonar
		disponible).</p>

		<p>Si esto falla, discuta con un centro de referencia la
		implantación de una circulación extracorpórea
		(ECMO).</p>

		<p>Fuente: ayudas cognitivas SFAR - Desglose del
		SDRA (COVID-19)</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> PaCO2 > 60mmHg y pH < 7.30
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<ul>
			<li> Monte Frespi a un máximo de 35 / min.</li>
			<li> Evite reducir el circuito de la máquina por
			ventilación (exposición cuidador / aerosolización viral).</li>
			<li> Siempre que Pplat 30 cm H2O + aumente
			compensando el Vt a 7 ml / kg PIT luego 8 ml / kg
			máximo PIT.</li>

		</ul>
		<p>Fuente: ayudas cognitivas SFAR - Desglose del
			SDRA (COVID-19)</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> SpO2 < 88%
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<ul>
			<li> Monte F102 y configure la PEEP asociada</li>
			<li> Poner en posición prono si no se prueba</li>
			<li> Si la hemodinámica estable discute una
			maniobra de reclutamiento
			dinámico montando cada 3 ciclos de ventilación la
			EP de +5 cmH20 (QSP Max plana a 40 cm H2O),
			luego mantenga esta configuración durante 10
			ciclos antes volver al nivel inicial de PEEP o usar
			una maniobra de CPAP 40 cmH20 por 20 s</li>
			<li> Si P / F <80 después de verificar los puntos
			anteriores, discuta con un referenciar la
			implantación de una circulación
			extracorpórea (ECMO)</li>
		</ul>
		<p>Fuente: ayudas cognitivas SFAR - Desglose del
		SDRA (COVID-19)</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Paciente hipoxémico NIV
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<p>Se debe evitar la oxigenoterapia de alto flujo / NIV
		siempre que esto es posible para limitar el riesgo
		de aerosolización del virus y el contagio.</p>
		<ul>
			<li> Si es necesario en pacientes hipoxémicos: Optiflow @</li>
			<li> Ajuste de 30-70L / min dependiendo de la
			tolerancia y el efecto PEEP deseado.</li>
			<li> Fi02 para Sa02>90%</li>
			<li> Efectividad en el swing toracoabdominal</li>
			<li> Si el relé OF / VNI no olvide apagar primero el
			dispositivo en su lugar y luego retire, coloque el
			otro en su lugar, luego comience (02 medicamento
			para guardar, riesgo de aerosolización)</li>
		</ul>
		<h3>ATENCIÓN</h3>
		<p>NO inicie Optiflow @ o NAV hasta que las gafas o
		enmascarar firmemente en el paciente y mantener
		una buena distancia para evitar cualuier
		contaminación! RéaCTVR CHU Protocolo de Amiens</p>
	</div>
</div>

<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Paciente hipercapnic de NIV
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<p>Si es necesario en pacientes hipercapnicos:
		ventilación no invasiva en Servo-1 @ rama doble
		con fuga para limitar el riesgo de contaminación</p>
		<ul>
			<li> Verificar la presencia de filtros:</li>
			<li> Si el humidificador se calienta: NO hay filtro de
			humidificador azul + filtro antibacteriano amarillo
			en rama espiratoria</li>
			<li> Sin humidificador calentado: filtro de
			humidificador azul + filtro antibacteriano
			amarillo en la rama espiratoria + inspiratoria</li>
			<li> Encienda el ventilador en modo no invasivo.</li>
			<li> PEEP regiage</li>
			<li> Configuración de ayuda</li>
			<li> Control Fi02</li>
			<li> Ajuste de alarma</li>
		</ul>
		<h3>ATENCIÓN</h3>
		<p>NO inicie Optiflow @ o NAV hasta que las gafas o
		enmascarar firmemente en el paciente y
		mantener una buena distancia para evitar
		cualquier contaminación!</p>
	</div>
</div>
<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Extracción de ventilación
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<p>La duración de la ventilación de los pacientes con
		ARDS COVID parece larga (2 a 15 días) con la
		retirada difícil</p>
		<ul>
			<li> Discuta el destete después de 72 horas de
			ventilación si Fi02 <0.6 y sin fallas asociado
			(hemodinámico, neurológico), criterios de PAVM,
			sepsis broncorrea activa o significativa.</li>
			<li> Modalidades según el protocolo de servicio
			(por ejemplo, parada de sedación, modo VSAI con
			nivel disminución de la ayuda mediante el
			monitoreo del Vt generado 8 ml / kg PIT)</li>
			<li> Si es difícil dejar de fumar, discuta la posibilidad
			de realizar una traqueotomía</li>
		</ul>
		<p>Fuente: ayudas cognitivas SFAR - Desglose del SDRA (COVID-19)</p>
		
	</div>
</div>
<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Algoritmo de destete de ventilación
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<img src="<?= Yii::$app->request->BaseUrl ?>/images/Algoritmo_de_destete.JPG" width="100%" alt="">
		
	</div>
</div>
<button class="btn myButton" type="button">
	<span class="glyphicon glyphicon-chevron-right"></span> Módulos de respirador
</button>
<div class="collapse" id="collapseExample1">
	<div class="well">
		<ul>
			<li> Uso de un sistema cerrado. La bolsa del sistema
			cerrado debe limpiarse. agua ppi según lo
			estipulado en las instrucciones y el sistema
			mantuvo el mayor tiempo posible (> 10 días)
			porque existe el riesgo de escasez de existencias.</li>
			<li> Humidificador calentado</li>
			<li> Verifique la presencia de un filtro amarillo
			antibacteriano en la rama espiratorio *</li>
			<li> El aerosol en la rama inspiratoria favorece los
			aerosoles ultrasónicos. PRECAUCIÓN en caso de
			desconexión si el aerosol convencional necesita
			abrirse el circuito respiratorio.
			(Algunos equipos sugieren hacer una pose de TV
			espiratorio y sujetar la sonda de intubación)</li>
		</ul>
		<p>RéaCTVR CHU Protocolo de Amiens</p>
	</div>
</div>