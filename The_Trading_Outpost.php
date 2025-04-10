<?php 
// The Trading Outpost - Professional Trading Toolkit
// Random Massima Zen relativa al trading
// "Il trading è un viaggio, non una destinazione. Ogni trade è un passo verso la maestria."
$zen = ['Il trading è un viaggio, non una destinazione. Ogni trade è un passo verso la maestria.', 'La Pazienza è la virtù dei forti. Anche nel Trading.', 'Le emozioni sono il principale motivo per cui si perdono soldi nel trading.', 'Tradare o non Tradare, questo è il dilemma', 'Perseverare. Sempre.', 'Il trading è come una maratona, non uno sprint.', 'La disciplina è la chiave del successo nel trading.', 'Non esiste un trade perfetto, solo opportunità.', 'Il mercato è un maestro severo ma giusto.'];
$zen_key = array_rand($zen);
$zen_message = $zen[$zen_key];
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Trading Outpost</title>
    <a href="journal.html"><h1>Vai al Diario di Trading</h1></a>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --gold: linear-gradient(135deg, #FFD700, #D4AF37, #FFD700);
            --gold-solid: #D4AF37;
            --dark-bg: #121212;
            --card-bg: #1e1e1e;
            --danger: #e74c3c;
            --success: #27ae60;
            --text-light: #e0e0e0;
            --text-muted: #b0b0b0;
            --info: #3498db;
        }
        
        body {
            background-color: var(--dark-bg);
            font-family: 'Montserrat', sans-serif;
            color: var(--text-light);
            line-height: 1.6;
            padding: 2rem;
            margin: 0;
     		padding: 0;
     	    background-image: url("highway-7511785_1920.jpg"); /* Percorso dell'immagine */
    		background-size: cover; /* Adatta l'immagine alla finestra */
    		background-repeat: no-repeat;
     		background-position: center center;
    		height: 100vh; /* Per coprire tutta l'altezza */
    		font-family: sans-serif;
    }
                
        .header-container {
            display: flex;
            align-items: center;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 3rem;
        }
        
        .gold-text {
            font-size: 3.5rem;
            font-weight: 700;
            text-transform: uppercase;
            background: var(--gold);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: 1.5px;
            position: relative;
            padding: 0.5rem 0;
            white-space: nowrap;
        }

        .period-selector {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .period-input {
            width: 80px;
            padding: 8px;
            background: #252525;
            border: 1px solid #383838;
            color: var(--text-light);
            border-radius: 4px;
            text-align: center;
        }
        
        .gold-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--gold);
        }
        
        .site-description {
            flex: 1;
            min-width: 300px;
            border-left: 2px solid var(--gold-solid);
            padding-left: 2rem;
        }
        
        .site-description h2 {
            color: var(--gold-solid);
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }
        
        .site-description p {
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }
        
        .dashboard {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .card-pro {
            background: var(--card-bg);
            border: 1px solid #333;
            border-radius: 6px;
            padding: 1.8rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            height: 100%;
        }
        
        .card-pro:hover {
            box-shadow: 0 10px 35px rgba(0,0,0,0.25);
            transform: translateY(-2px);
            border-color: var(--gold-solid);
        }
        
        .card-title {
            color: var(--gold-solid);
            padding-bottom: 0.8rem;
            margin-bottom: 1.8rem;
            font-size: 1.3rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #333;
        }
        
        .input-group-pro {
            margin-bottom: 1.5rem;
        }
        
        .input-pro {
            width: 100%;
            padding: 12px 15px;
            background: #252525;
            border: 1px solid #383838;
            color: var(--text-light);
            border-radius: 4px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        
        .input-pro:focus {
            border-color: var(--gold-solid);
            box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
            outline: none;
        }
        
        .btn-pro {
            padding: 12px 20px;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            width: 100%;
            margin: 8px 0;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        
        .btn-win {
            background: var(--success);
            color: white;
        }
        
        .btn-loss {
            background: var(--danger);
            color: white;
        }
        
        .btn-calculate {
            background: var(--gold);
            color: #121212;
            font-weight: 700;
        }
        
        .btn-info {
            background: var(--info);
            color: white;
        }
        
        .result {
            font-size: 1.1rem;
            margin-top: 1.5rem;
            padding: 1rem;
            background: #252525;
            border-radius: 4px;
            text-align: center;
            font-weight: 600;
            border: 1px solid #333;
        }
        
        .disclaimer {
            background: #1e1e1e;
            padding: 1.5rem;
            margin-top: 3rem;
            border-left: 4px solid var(--danger);
            border-radius: 4px;
            font-size: 0.9rem;
            color: var(--text-muted);
        }
        
        .selector-container {
            display: flex;
            gap: 10px;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }
        
        .selector-btn {
            flex: 1;
            min-width: 120px;
            padding: 10px;
            background: #252525;
            border: 1px solid #383838;
            color: var(--text-light);
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .selector-btn:hover {
            background: #333;
            border-color: var(--gold-solid);
        }
        
        .selector-btn.active {
            background: var(--gold-solid);
            color: #121212;
            font-weight: 600;
            border-color: var(--gold-solid);
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: var(--gold-solid);
            animation: spin 1s ease-in-out infinite;
            margin-left: 10px;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .atr-details {
            margin-top: 15px;
            padding: 10px;
            background: #252525;
            border-radius: 4px;
            border: 1px solid #333;
        }
        
        .atr-detail-row {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            border-bottom: 1px solid #333;
        }
        
        .atr-detail-row:last-child {
            border-bottom: none;
        }
        
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1.5rem;
            }
            
            .site-description {
                border-left: none;
                border-top: 2px solid var(--gold-solid);
                padding-left: 0;
                padding-top: 1.5rem;
            }
            
            .gold-text {
                font-size: 2.5rem;
            }
            
            .selector-container {
                flex-direction: column;
            }
            
            .selector-btn {
                min-width: 100%;
            }
            
        }
    </style>
</head>
<body>
	 <div class="dashboard">
        <div class="header-container">
            <div class="gold-text">The Trading Outpost</div>
            <h3><strong><em><?= $zen_message ?></em></strong></h3>
            <div class="site-description">
                <h2>Professional Trading Toolkit</h2>
                <p>The Trading Outpost è la suite definitiva per trader seri. Progettata con precisione per analisi tecniche avanzate, gestione del rischio e ottimizzazione delle performance. I nostri strumenti integrati ti forniscono il vantaggio competitivo necessario nei mercati moderni.</p>
                <p>Monitora la tua winrate, calcola dimensioni di posizione ottimali e determina livelli di stop loss basati su ATR - tutto in un'unica piattaforma elegante e ad alte prestazioni.</p>
                
            </div>
        </div>
        
        <div class="row">
            <!-- Winrate Tracker -->
            <div class="col-md-4">
                <div class="card-pro">
                    <div class="card-title">WINRATE TRACKER</div>
                    <div class="input-group-pro">
                        <div class="result" id="winrateDisplay">🏆 0.00%</div>
                        <div class="result" id="winsLosses">✅ 0W | ❌ 0L</div>
                    </div>
                    <button class="btn-pro btn-win" onclick="addWin()">➕ VINCITA</button>
                    <button class="btn-pro btn-loss" onclick="addLoss()">➖ PERDITA</button>
                    <button class="btn-pro" style="background: #2c3e50" onclick="resetWinrate()">🔄 RESET</button>
                </div>
            </div>

            <!-- Position Sizing -->
            <div class="col-md-4">
                <div class="card-pro">
                    <div class="card-title">POSITION SIZING</div>
                    <div class="input-group-pro">
                        <input type="number" class="input-pro" id="capitale" placeholder="💰 Perdita da recuperare (€)">
                    </div>
                    <div class="input-group-pro">
                        <input type="number" class="input-pro" id="valoreTick" placeholder="📊 Valore Tick (€)">
                    </div>
                    <div class="input-group-pro">
                        <input type="number" class="input-pro" id="takeProfit" placeholder="🎯 Take Profit in Ticks">
                    </div>
                    <button class="btn-pro btn-calculate" onclick="calcolaContratti()">📈 CALCOLA CONTRATTI</button>
                    <div class="result" id="contrattiResult">--</div>
                </div>
            </div>

            <!-- ATR Calculator -->
            <div class="col-md-4">
                <div class="card-pro">
                    <div class="card-title">ATR CALCULATOR</div>
                    <div class="input-group-pro">
                        <input type="number" class="input-pro" id="atr" placeholder="📏 ATR in punti">
                    </div>
                    <div class="input-group-pro">
                        <input type="number" class="input-pro" id="ticksPunto" placeholder="⚙️ Ticks per Punto dell'Asset">
                    </div>
                    <div class="input-group-pro">
                        <input type="number" class="input-pro" id="moltiplicatore" placeholder="🎚️ Moltiplicatore ATR">
                    </div>
                    <button class="btn-pro btn-calculate" onclick="calcolaATR()">🛑 CALCOLA STOP LOSS</button>
                    <div class="result" id="atrResult">--</div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- ATR Live Data -->
            <div class="col-md-12">
                <div class="card-pro">
                    <div class="card-title">LIVE ATR CALCULATOR (EXPERIMENTAL)</div>
                    
                    <!-- Asset Selection -->
                    <div class="input-group-pro">
                        <div class="selector-container">
                            <div class="selector-btn active" data-category="indices" onclick="selectCategory(this)">Indici</div>
                            <div class="selector-btn" data-category="stocksita" onclick="selectCategory(this)">Azioni Italiane</div>
                            <div class="selector-btn" data-category="stocksus" onclick="selectCategory(this)">Azioni Americane</div>
                            <div class="selector-btn" data-category="forex" onclick="selectCategory(this)">Forex</div>
                            <div class="selector-btn" data-category="crypto" onclick="selectCategory(this)">Crypto</div>
                        </div>
                        
                        <select class="input-pro" id="assetSelect">
                            <!-- Indices -->
                            <option value="^GSPC" data-category="indices" style="display:none">S&P 500</option>
                            <option value="^DJI" data-category="indices" style="display:none">Dow Jones</option>
                            <option value="^IXIC" data-category="indices" style="display:none">NASDAQ</option>
                            <option value="^FTSE" data-category="indices" style="display:none">FTSE 100</option>
                            <option value="^GDAXI" data-category="indices" style="display:none">DAX</option>
                            <option value="^N225" data-category="indices" style="display:none">Nikkei 225</option>
                            <option value="^STOXX50E" data-category="indices" style="display:none">Euro Stoxx 50</option>
                            <option value="^AEX" data-category="indices" style="display:none">AEX</option>
                            <option value="^IBEX" data-category="indices" style="display:none">IBEX 35</option>
                            <option value="^CAC40" data-category="indices" style="display:none">CAC 40</option>
                            <option value="^MXX" data-category="indices" style="display:none">IPC (Mexico)</option>
                            <option value="^RUSSELL2000" data-category="indices" style="display:none">Russell 2000</option>
                            <option value="^VIX" data-category="indices" style="display:none">VIX (Volatility Index)</option>
                            <option value="^NSEI" data-category="indices" style="display:none">Nifty 50</option>
                            <option value="^BSESN" data-category="indices" style="display:none">BSE Sensex</option>
                            <option value="^TASI" data-category="indices" style="display:none">Tadawul All Share Index</option>
                            <option value="^AXJO" data-category="indices" style="display:none">ASX 200</option>
                            <option value="^NZ50" data-category="indices" style="display:none">NZX 50</option>
                            <option value="^BFX" data-category="indices" style="display:none">BEL 20</option>
                            <option value="^KOSPI" data-category="indices" style="display:none">KOSPI</option>

                            
                            <!-- Stocks -->
                            <!-- Stocks Italiane -->
                            <option value="ENEL.MI" data-category="stocksita" style="display:none">Enel</option>
                            <option value="ENI.MI" data-category="stocksita" style="display:none">Eni</option>
                            <option value="ISP.MI" data-category="stocksita" style="display:none">Intesa Sanpaolo</option>
                            <option value="UCG.MI" data-category="stocksita" style="display:none">Unicredit</option>
                            <option value="RACE.MI" data-category="stocksita" style="display:none">Ferrari</option>
                            <option value="TIT.MI" data-category="stocksita" style="display:none">Telecom Italia</option>
                            <option value="FCA.MI" data-category="stocksita" style="display:none">Fiat Chrysler Automobiles</option>
                            <option value="STLA.MI" data-category="stocksita" style="display:none">Stellantis</option>
                            <option value="LUX.MI" data-category="stocksita" style="display:none">Luxottica</option>
                            <option value="PIR.MI" data-category="stocksita" style="display:none">Pirelli</option>
                            <option value="ENAV.MI" data-category="stocksita" style="display:none">Enav</option>
                            <option value="CARR.MI" data-category="stocksita" style="display:none">Carrier Global</option>
                            <option value="LDA.MI" data-category="stocksita" style="display:none">Leonardo</option>
                            <option value="IT.MI" data-category="stocksita" style="display:none">Italgas</option>
                            <option value="BMED.MI" data-category="stocksita" style="display:none">Banca Mediolanum</option>
                            <option value="SBE.MI" data-category="stocksita" style="display:none">Snam</option>
                            <option value="G.MI" data-category="stocksita" style="display:none">Generali</option>
                            <option value="TLX.MI" data-category="stocksita" style="display:none">Telecom Italia Sparkle</option>
                            <option value="RCS.MI" data-category="stocksita" style="display:none">RCS MediaGroup</option>
                            <option value="BXP.MI" data-category="stocksita" style="display:none">Banca Popolare di Sondrio</option>
                            <option value="P.MI" data-category="stocksita" style="display:none">Prada</option>
                            <option value="SPM.MI" data-category="stocksita" style="display:none">Saipem</option>
                            <option value="MR.MI" data-category="stocksita" style="display:none">Mediobanca</option>
                            <option value="FNM.MI" data-category="stocksita" style="display:none">Ferrovie Nord Milano</option>
                            <option value="BPM.MI" data-category="stocksita" style="display:none">Banca Popolare di Milano</option>
                            <option value="SWS.MI" data-category="stocksita" style="display:none">Sogenia</option>
                            <option value="EC.MI" data-category="stocksita" style="display:none">EC SpA</option>
                            <option value="CIRC.MI" data-category="stocksita" style="display:none">Cir S.p.A.</option>
                            <option value="ECO.MI" data-category="stocksita" style="display:none">Eco Group</option>
                            <option value="TPL.MI" data-category="stocksita" style="display:none">Tamburi Investment Partners</option>
                            <option value="SOG.MI" data-category="stocksita" style="display:none">Sogefi</option>
                            <option value="GRG.MI" data-category="stocksita" style="display:none">Gruppo Generali</option>
                            <option value="PZZA.MI" data-category="stocksita" style="display:none">Piazza Affari</option>
                            <option value="REC.MI" data-category="stocksita" style="display:none">Reggio Emilia</option>
                            <option value="STG.MI" data-category="stocksita" style="display:none">STG S.p.A.</option>
                            <option value="CTT.MI" data-category="stocksita" style="display:none">CTT S.p.A.</option>
                            <option value="DIA.MI" data-category="stocksita" style="display:none">DIA S.p.A.</option>
                            <option value="FVM.MI" data-category="stocksita" style="display:none">FVM SpA</option>
                            <option value="ASSO.MI" data-category="stocksita" style="display:none">Assogestioni</option>
                            <option value="TTS.MI" data-category="stocksita" style="display:none">TTS S.p.A.</option>
                            <option value="AZM.MI" data-category="stocksita" style="display:none">Azimut Holding</option>
                            <option value="BID.MI" data-category="stocksita" style="display:none">BID S.p.A.</option>
                            <option value="VIM.MI" data-category="stocksita" style="display:none">Viminas S.p.A.</option>
                            <option value="OIT.MI" data-category="stocksita" style="display:none">Olivetti S.p.A.</option>
                            <option value="AIR.MI" data-category="stocksita" style="display:none">Airbus S.A.S.</option>
                            <option value="ANM.MI" data-category="stocksita" style="display:none">Ansaldo Sts</option>
                            <option value="PTM.MI" data-category="stocksita" style="display:none">PTM S.p.A.</option>
                            <option value="FCL.MI" data-category="stocksita" style="display:none">FCL S.p.A.</option>
                            <option value="FNE.MI" data-category="stocksita" style="display:none">Fondiaria S.A.</option>
                            <option value="PLS.MI" data-category="stocksita" style="display:none">PLS S.p.A.</option>

                            <!-- Stocks Americane -->    
                            <option value="AAPL" data-category="stocksus" style="display:none">Apple</option>
                            <option value="MSFT" data-category="stocksus" style="display:none">Microsoft</option>
                            <option value="AMZN" data-category="stocksus" style="display:none">Amazon</option>
                            <option value="TSLA" data-category="stocksus" style="display:none">Tesla</option>
                            <option value="GOOG" data-category="stocksus" style="display:none">Alphabet (Google) Class A</option>
                            <option value="GOOGL" data-category="stocksus" style="display:none">Alphabet (Google) Class C</option>
                            <option value="META" data-category="stocksus" style="display:none">Meta (Facebook)</option>
                            <option value="NVDA" data-category="stocksus" style="display:none">NVIDIA</option>
                            <option value="NFLX" data-category="stocksus" style="display:none">Netflix</option>
                            <option value="DIS" data-category="stocksus" style="display:none">Disney</option>
                            <option value="KO" data-category="stocksus" style="display:none">Coca-Cola</option>
                            <option value="JNJ" data-category="stocksus" style="display:none">Johnson & Johnson</option>
                            <option value="BA" data-category="stocksus" style="display:none">Boeing</option>
                            <option value="V" data-category="stocksus" style="display:none">Visa</option>
                            <option value="PYPL" data-category="stocksus" style="display:none">PayPal</option>
                            <option value="PG" data-category="stocksus" style="display:none">Procter & Gamble</option>
                            <option value="CVX" data-category="stocksus" style="display:none">Chevron</option>
                            <option value="WMT" data-category="stocksus" style="display:none">Walmart</option>
                            <option value="XOM" data-category="stocksus" style="display:none">ExxonMobil</option>
                            <option value="CSCO" data-category="stocksus" style="display:none">Cisco Systems</option>
                            <option value="PFE" data-category="stocksus" style="display:none">Pfizer</option>
                            <option value="INTC" data-category="stocksus" style="display:none">Intel</option>
                            <option value="AMD" data-category="stocksus" style="display:none">AMD</option>
                            <option value="T" data-category="stocksus" style="display:none">AT&T</option>
                            <option value="LMT" data-category="stocksus" style="display:none">Lockheed Martin</option>
                            <option value="GS" data-category="stocksus" style="display:none">Goldman Sachs</option>
                            <option value="SPG" data-category="stocksus" style="display:none">Simon Property Group</option>
                            <option value="UPS" data-category="stocksus" style="display:none">United Parcel Service</option>
                            <option value="MCD" data-category="stocksus" style="display:none">McDonald's</option>
                            <option value="AMT" data-category="stocksus" style="display:none">American Tower</option>
                            <option value="UNH" data-category="stocksus" style="display:none">UnitedHealth Group</option>
                            <option value="AXP" data-category="stocksus" style="display:none">American Express</option>
                            <option value="MS" data-category="stocksus" style="display:none">Morgan Stanley</option>
                            <option value="IBM" data-category="stocksus" style="display:none">IBM</option>
                            <option value="CAT" data-category="stocksus" style="display:none">Caterpillar</option>
                            <option value="RTX" data-category="stocksus" style="display:none">Raytheon Technologies</option>
                            <option value="SCHW" data-category="stocksus" style="display:none">Charles Schwab</option>
                            <option value="MDT" data-category="stocksus" style="display:none">Medtronic</option>
                            <option value="DD" data-category="stocksus" style="display:none">DuPont</option>
                            <option value="NKE" data-category="stocksus" style="display:none">Nike</option>
                            <option value="CL" data-category="stocksus" style="display:none">Colgate-Palmolive</option>
                            <option value="LOW" data-category="stocksus" style="display:none">Lowe's</option>
                            <option value="VZ" data-category="stocksus" style="display:none">Verizon</option>
                            <option value="CVS" data-category="stocksus" style="display:none">CVS Health</option>
                            <option value="GE" data-category="stocksus" style="display:none">General Electric</option>
                            <option value="TMO" data-category="stocksus" style="display:none">Thermo Fisher Scientific</option>
                            <option value="CLX" data-category="stocksus" style="display:none">Clorox</option>
                            <option value="C" data-category="stocksus" style="display:none">Citigroup</option>
                            <option value="RTX" data-category="stocksus" style="display:none">Raytheon Technologies</option>
                            <option value="MMM" data-category="stocksus" style="display:none">3M</option>
                            <option value="F" data-category="stocksus" style="display:none">Ford</option>
                            <option value="HPQ" data-category="stocksus" style="display:none">HP Inc.</option>
                            <option value="LUV" data-category="stocksus" style="display:none">Southwest Airlines</option>
                            <option value="WFC" data-category="stocksus" style="display:none">Wells Fargo</option>
                            <option value="K" data-category="stocksus" style="display:none">Kellogg's</option>
                            <option value="DHR" data-category="stocksus" style="display:none">Danaher</option>
                            <option value="COP" data-category="stocksus" style="display:none">ConocoPhillips</option>
                            <option value="COST" data-category="stocksus" style="display:none">Costco</option>
                            <option value="SBUX" data-category="stocksus" style="display:none">Starbucks</option>
                            <option value="TGT" data-category="stocksus" style="display:none">Target</option>
                            <option value="FIS" data-category="stocksus" style="display:none">FIS</option>
                            <option value="BMY" data-category="stocksus" style="display:none">Bristol-Myers Squibb</option>
                            <option value="JNJ" data-category="stocksus" style="display:none">Johnson & Johnson</option>
                            <option value="DIS" data-category="stocksus" style="display:none">Walt Disney</option>
                            <option value="PLD" data-category="stocksus" style="display:none">Prologis</option>
                            <option value="PPL" data-category="stocksus" style="display:none">PPL Corporation</option>
                            <option value="ALL" data-category="stocksus" style="display:none">Allstate</option>
                            <option value="MU" data-category="stocksus" style="display:none">Micron Technology</option>
                            <option value="VLO" data-category="stocksus" style="display:none">Valero Energy</option>
                            <option value="AMGN" data-category="stocksus" style="display:none">Amgen</option>
                            <option value="HCA" data-category="stocksus" style="display:none">HCA Healthcare</option>
                            <option value="CNC" data-category="stocksus" style="display:none">Centene</option>
                            <option value="BK" data-category="stocksus" style="display:none">Bank of New York Mellon</option>
                            <option value="BBY" data-category="stocksus" style="display:none">Best Buy</option>
                            <option value="XOM" data-category="stocksus" style="display:none">ExxonMobil</option>
                            <option value="ETN" data-category="stocksus" style="display:none">Eaton Corporation</option>
                            <option value="MO" data-category="stocksus" style="display:none">Altria</option>
                            <option value="STZ" data-category="stocksus" style="display:none">Constellation Brands</option>
                            <option value="ABT" data-category="stocksus" style="display:none">Abbott Laboratories</option>
                            <option value="SYK" data-category="stocksus" style="display:none">Stryker Corporation</option>
                            
                            <!-- Forex -->
                            <option value="EURUSD=X" data-category="forex" style="display:none">EUR/USD</option>
                            <option value="GBPUSD=X" data-category="forex" style="display:none">GBP/USD</option>
                            <option value="USDJPY=X" data-category="forex" style="display:none">USD/JPY</option>
                            <option value="AUDUSD=X" data-category="forex" style="display:none">AUD/USD</option>
                            <option value="USDCHF=X" data-category="forex" style="display:none">USD/CHF</option>
                            <option value="USDCAD=X" data-category="forex" style="display:none">USD/CAD</option>
                            <option value="NZDUSD=X" data-category="forex" style="display:none">NZD/USD</option>
                            <option value="EURGBP=X" data-category="forex" style="display:none">EUR/GBP</option>
                            <option value="EURJPY=X" data-category="forex" style="display:none">EUR/JPY</option>
                            <option value="GBPJPY=X" data-category="forex" style="display:none">GBP/JPY</option>
                            <option value="AUDJPY=X" data-category="forex" style="display:none">AUD/JPY</option>
                            <option value="CHFJPY=X" data-category="forex" style="display:none">CHF/JPY</option>
                            <option value="CADJPY=X" data-category="forex" style="display:none">CAD/JPY</option>
                            <option value="AUDCAD=X" data-category="forex" style="display:none">AUD/CAD</option>
                            <option value="EURCHF=X" data-category="forex" style="display:none">EUR/CHF</option>
                            <option value="GBPCHF=X" data-category="forex" style="display:none">GBP/CHF</option>
                            <option value="NZDJPY=X" data-category="forex" style="display:none">NZD/JPY</option>
                            <option value="EURAUD=X" data-category="forex" style="display:none">EUR/AUD</option>
                            <option value="GBPUSD=X" data-category="forex" style="display:none">GBP/USD</option>
                            <option value="USDHKD=X" data-category="forex" style="display:none">USD/HKD</option>

                            
                            <!-- Crypto -->
                            <option value="BTC-USD" data-category="crypto" style="display:none">Bitcoin</option>
                            <option value="ETH-USD" data-category="crypto" style="display:none">Ethereum</option>
                            <option value="BNB-USD" data-category="crypto" style="display:none">Binance Coin</option>
                            <option value="XRP-USD" data-category="crypto" style="display:none">XRP (Ripple)</option>
                            <option value="ADA-USD" data-category="crypto" style="display:none">Cardano</option>
                            <option value="SOL-USD" data-category="crypto" style="display:none">Solana</option>
                            <option value="DOGE-USD" data-category="crypto" style="display:none">Dogecoin</option>
                            <option value="DOT-USD" data-category="crypto" style="display:none">Polkadot</option>
                            <option value="LTC-USD" data-category="crypto" style="display:none">Litecoin</option>
                            <option value="MATIC-USD" data-category="crypto" style="display:none">Polygon (MATIC)</option>

                        </select>
                    </div>
                    
                    <!-- Timeframe Selection -->
                    <div class="input-group-pro">
                        <div class="selector-container">
                            <div class="selector-btn active" data-interval="1m" onclick="selectInterval(this)">1 Minuto</div>
                            <div class="selector-btn" data-interval="2m" onclick="selectInterval(this)">2 Minuti</div>
                            <div class="selector-btn" data-interval="3m" onclick="selectInterval(this)">3 Minuti</div>
                            <div class="selector-btn" data-interval="4m" onclick="selectInterval(this)">4 Minuti</div>
                            <div class="selector-btn" data-interval="5m" onclick="selectInterval(this)">5 Minuti</div>
                            <div class="selector-btn" data-interval="10m" onclick="selectInterval(this)">10 Minuti</div>
                            <div class="selector-btn" data-interval="15m" onclick="selectInterval(this)">15 Minuti</div>
                            <div class="selector-btn" data-interval="30m" onclick="selectInterval(this)">30 Minuti</div>
                            <div class="selector-btn" data-interval="1h" onclick="selectInterval(this)">1 Ora</div>
                            <div class="selector-btn" data-interval="2h" onclick="selectInterval(this)">2 Ore</div>
                            <div class="selector-btn" data-interval="4h" onclick="selectInterval(this)">4 Ore</div>
                            <div class="selector-btn" data-interval="1d" onclick="selectInterval(this)">1 Giorno</div>
                            <div class="selector-btn" data-interval="1wk" onclick="selectInterval(this)">1 Settimana</div>
                            <div class="selector-btn" data-interval="1mo" onclick="selectInterval(this)">1 Mese</div>
                            <div class="selector-btn" data-interval="3mo" onclick="selectInterval(this)">3 Mesi</div>
                            <div class="selector-btn" data-interval="6mo" onclick="selectInterval(this)">6 Mesi</div>
                            
                        </div>
                    </div>
                    <!-- Aggiungi questa sezione prima del pulsante "CALCOLA ATR LIVE" -->
                    <div class="input-group-pro">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <label style="color: var(--text-muted);">Periodo ATR (default: 14):</label>
                            <div class="period-selector">
                                <input type="number" id="atrPeriod" class="period-input" value="14" min="1" max="10000">
                                <button class="btn-pro btn-info" onclick="updateAtrPeriod()">Applica</button>
                            </div>
                        </div>
                    </div>
                    <button class="btn-pro btn-calculate" onclick="fetchATRData()" id="fetchAtrBtn">
                        📊 FETCH ATR LIVE DATA
                    </button>
                    
                    <div class="result" id="atrLiveResult">
                        Seleziona un asset, timeframe e clicca "FETCH ATR LIVE DATA"
                    </div>
                    
                    <div class="atr-details" id="atrDetails" style="display: none;">
                        <div class="atr-detail-row">
                            <span>Asset:</span>
                            <span id="detail-asset">--</span>
                        </div>
                        <div class="atr-detail-row">
                            <span>Timeframe:</span>
                            <span id="detail-timeframe">--</span>
                        </div>
                        <div class="atr-detail-row">
                            <span>Periodo:</span>
                            <span id="detail-period">--</span>
                        </div>
                        <div class="atr-detail-row">
                            <span>Prezzo Attuale:</span>
                            <span id="detail-price">--</span>
                        </div>
                        <div class="atr-detail-row">
                            <span>ATR:</span>
                            <span id="detail-atr">--</span>
                        </div>
                        <div class="atr-detail-row">
                            <span>Range Giornaliero:</span>
                            <span id="detail-range">--</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="disclaimer">
            ⚠️ DISCLAIMER: Questo strumento è a scopo informativo. Il trading comporta rischi di perdita. I risultati sono puramente indicativi e non costituiscono consulenza finanziaria. Si raccomanda di effettuare ricerche indipendenti prima di prendere decisioni di investimento. I dati sono forniti da Yahoo Finance.
        </div>
    </div>

    <script>
      function playAudio() {
            // Crea un elemento audio
            var audio = new Audio();
            
            // Specifica il percorso del file MP3
            audio.src = "apertura.mp3";
            
            // Riproduci l'audio
            audio.play().catch(e => {
                console.log("Impossibile riprodurre l'audio:", e);
                // Alcuni browser potrebbero bloccare la riproduzione automatica
                // Potresti dover aggiungere un pulsante per l'utente per avviare la riproduzione
            });
        }
        
        async function getATR(symbol, interval = "1min", period = 14) {
            const API_KEY = "API_KEY"; //  Alpha Vantage APi Key
            if (!symbol) {
              console.error("Errore: simbolo non valido.");
              return;
            }
            const url = `https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=${symbol}&interval=${interval}&apikey=${API_KEY}&outputsize=compact`;
          
            const response = await fetch(url);
            const data = await response.json();
            const prices = data[`Time Series (${interval})`];
          
            if (!prices) {
              console.error("Errore: dati non ricevuti.");
              return;
            }
          
            const candles = Object.values(prices).slice(0, period + 1).map(p => ({
              high: parseFloat(p["2. high"]),
              low: parseFloat(p["3. low"]),
              close: parseFloat(p["4. close"]),
            }));
          
            let atrSum = 0;
            for (let i = 1; i < candles.length; i++) {
              const prevClose = candles[i - 1].close;
              const { high, low } = candles[i];
              const tr = Math.max(high - low, Math.abs(high - prevClose), Math.abs(low - prevClose));
              atrSum += tr;
            }
          
            const atr = atrSum / period;
            console.log("ATR:", atr.toFixed(5));
            return atr;
          }
          document.getElementById("atrPeriod").addEventListener("click", () => {
            const symbol = "SPY"; // Esempio: SPY per S&P500 ETF
            const interval = "1min"; // o "5min", "1day" ecc.
            const period = parseInt(document.getElementById("atrPeriod").value);
          
            getATR(symbol, interval, period).then(atr => {
              document.getElementById("result").textContent = `ATR: ${atr.toFixed(5)}`;
            });
          });
          
          
          
       // Winrate Tracker
            let wins = 0;
            let losses = 0;

            function updateWinrate() {
                const total = wins + losses;
                const winrate = total > 0 ? (wins / total * 100) : 0;
                document.getElementById('winrateDisplay').innerHTML = `🏆 ${winrate.toFixed(2)}%`;
                document.getElementById('winsLosses').innerHTML = `✅ ${wins}W | ❌ ${losses}L`;
            }

            function addWin() {
                wins++;
                updateWinrate();
            }

            function addLoss() {
                losses++;
                updateWinrate();
            }

            function resetWinrate() {
                wins = 0;
                losses = 0;
                updateWinrate();
            }

            // Position Sizing Calculator
            function calcolaContratti() {
                try {
                    const capitale = parseFloat(document.getElementById('capitale').value);
                    const valoreTick = parseFloat(document.getElementById('valoreTick').value);
                    const takeProfit = parseFloat(document.getElementById('takeProfit').value);
                    
                    const contratti = (capitale / valoreTick) / takeProfit;
                    document.getElementById('contrattiResult').innerHTML = `📈 ${contratti.toFixed(2)} Contratti`;
                } catch (error) {
                    alert('Inserisci valori validi!');
                }
            }

            // ATR Calculator
            function calcolaATR() {
                try {
                    const atr = parseFloat(document.getElementById('atr').value);
                    const ticksPunto = parseFloat(document.getElementById('ticksPunto').value);
                    const moltiplicatore = parseFloat(document.getElementById('moltiplicatore').value);
                    
                    const stopLoss = atr * ticksPunto * moltiplicatore;
                    document.getElementById('atrResult').innerHTML = `🛑 ${stopLoss.toFixed(2)} Punti`;
                } catch (error) {
                    alert('Inserisci valori validi!');
                }
            }

            // Live ATR Data Section
            let selectedCategory = 'indices';
            let selectedInterval = '1m';
            let selectedRange = '1d';
            let atrPeriod = 14;

            function updateAtrPeriod() {
                const newPeriod = parseInt(document.getElementById('atrPeriod').value);
                if (newPeriod >= 1 && newPeriod <= 10000) {
                    atrPeriod = newPeriod;
                    document.getElementById('detail-atr-period').textContent = atrPeriod;
                    showToast(`Periodo ATR impostato a ${atrPeriod}`);
                } else {
                    alert('Il periodo ATR deve essere tra 1 e 10000');
                }
            }

            function selectCategory(element) {
                document.querySelectorAll('.selector-btn[data-category]').forEach(btn => {
                    btn.classList.remove('active');
                });
                element.classList.add('active');
                selectedCategory = element.getAttribute('data-category');
                
                // Update asset dropdown visibility
                const assetOptions = document.querySelectorAll('#assetSelect option');
                assetOptions.forEach(option => {
                    if (option.getAttribute('data-category') === selectedCategory) {
                        option.style.display = '';
                    } else {
                        option.style.display = 'none';
                    }
                });
                
                // Select first visible option
                const visibleOptions = Array.from(assetOptions).filter(opt => opt.style.display !== 'none');
                if (visibleOptions.length > 0) {
                    document.getElementById('assetSelect').value = visibleOptions[0].value;
                }
            }

            function selectInterval(element) {
                document.querySelectorAll('.selector-btn[data-interval]').forEach(btn => {
                    btn.classList.remove('active');
                });
                element.classList.add('active');
                selectedInterval = element.getAttribute('data-interval');
            }

            function selectRange(element) {
                document.querySelectorAll('.selector-btn[data-range]').forEach(btn => {
                    btn.classList.remove('active');
                });
                element.classList.add('active');
                selectedRange = element.getAttribute('data-range');
            }

            function calculateATR(prices, period) {
                if (!prices || prices.length < period + 1) return 0;
                
                const trueRanges = [];
                
                for (let i = 1; i < prices.length; i++) {
                    const current = prices[i];
                    const previous = prices[i-1];
                    
                    const highLow = current.high - current.low;
                    const highClose = Math.abs(current.high - previous.close);
                    const lowClose = Math.abs(current.low - previous.close);
                    
                    const trueRange = Math.max(highLow, highClose, lowClose);
                    trueRanges.push(trueRange);
                }
                
                // Simple Moving Average of True Range
                if (trueRanges.length < period) return 0;
                
                let atr = 0;
                for (let i = 0; i < period; i++) {
                    atr += trueRanges[i];
                }
                atr /= period;
                
                return atr;
            }

            function fetchATRData() {
                const btn = document.getElementById('fetchAtrBtn');
                const originalText = btn.innerHTML;
                btn.innerHTML = '<span class="loading"></span> Caricamento...';
                btn.disabled = true;
                
                const assetSymbol = document.getElementById('assetSelect').value;
                const assetName = document.getElementById('assetSelect').options[document.getElementById('assetSelect').selectedIndex].text;
                
                // Costruisci l'URL per Yahoo Finance API
                //const url = `https://query1.finance.yahoo.com/v8/finance/chart/${assetSymbol}?interval=${selectedInterval}&range=${selectedRange}`;
                
                fetch(url)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Errore nella risposta del server');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (!data.chart || !data.chart.result || data.chart.result.length === 0) {
                            throw new Error('Dati non disponibili per questo asset');
                        }
                        
                        const result = data.chart.result[0];
                        const prices = result.indicators.quote[0];
                        const timestamps = result.timestamp;
                        
                        // Prepara i dati per il calcolo ATR
                        const priceData = [];
                        for (let i = 0; i < timestamps.length; i++) {
                            // Verifica che i dati esistano
                            if (prices.open[i] && prices.high[i] && prices.low[i] && prices.close[i]) {
                                priceData.push({
                                    open: prices.open[i],
                                    high: prices.high[i],
                                    low: prices.low[i],
                                    close: prices.close[i]
                                });
                            }
                        }
                        
                        // Calcola ATR con il periodo selezionato
                        const atrValue = calculateATR(priceData, atrPeriod);
                        
                        // Prezzo attuale (ultimo close disponibile)
                        const currentPrice = priceData.length > 0 ? priceData[priceData.length - 1].close : 'N/A';
                        
                        // Range giornaliero (high - low dell'ultimo dato)
                        const dailyRange = priceData.length > 0 ? 
                            (priceData[priceData.length - 1].high - priceData[priceData.length - 1].low).toFixed(4) : 'N/A';
                        
                        // Mostra risultati
                        document.getElementById('atrLiveResult').innerHTML = `
                            <div style="font-size: 1.3rem; margin-bottom: 10px;">
                                <strong>${assetName}</strong> ATR(${atrPeriod}): <span style="color: var(--gold-solid)">${atrValue.toFixed(4)}</span>
                            </div>
                            <div style="font-size: 0.9rem; color: var(--text-muted);">
                                Clicca per copiare negli appunti
                            </div>
                        `;
                        
                        // Mostra dettagli
                        document.getElementById('detail-asset').textContent = assetName;
                        document.getElementById('detail-timeframe').textContent = getTimeframeLabel(selectedInterval);
                        document.getElementById('detail-period').textContent = getRangeLabel(selectedRange);
                        document.getElementById('detail-atr-period').textContent = atrPeriod;
                        document.getElementById('detail-price').textContent = currentPrice !== 'N/A' ? currentPrice.toFixed(4) : 'N/A';
                        document.getElementById('detail-atr').textContent = atrValue.toFixed(4);
                        document.getElementById('detail-range').textContent = dailyRange;
                        
                        document.getElementById('atrDetails').style.display = 'block';
                        
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        document.getElementById('atrLiveResult').innerHTML = 'Errore nel recupero dei dati: ' + error.message;
                        document.getElementById('atrDetails').style.display = 'none';
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    });
            }

            function getTimeframeLabel(interval) {
                const labels = {
                    '1m': '1 Minuto',
                    '5m': '5 Minuti',
                    '15m': '15 Minuti',
                    '30m': '30 Minuti',
                    '1h': '1 Ora',
                    '1d': '1 Giorno',
                    '1wk': '1 Settimana',
                    '1mo': '1 Mese'
                };
                return labels[interval] || interval;
            }

            function getRangeLabel(range) {
                const labels = {
                    '1d': '1 Giorno',
                    '5d': '5 Giorni',
                    '1mo': '1 Mese',
                    '3mo': '3 Mesi',
                    '6mo': '6 Mesi',
                    '1y': '1 Anno',
                    '5y': '5 Anni',
                    'max': 'Massimo disponibile'
                };
                return labels[range] || range;
            }

            function copyToClipboard(elementId) {
                const element = document.getElementById(elementId);
                let textToCopy = element.innerText;
                
                // Per il risultato ATR Live, prendiamo solo il valore dell'ATR senza testo extra
                if (elementId === 'atrLiveResult') {
                    const assetName = document.getElementById('detail-asset').textContent;
                    const atrValue = document.getElementById('detail-atr').textContent;
                    textToCopy = `${assetName} ATR(${atrPeriod}): ${atrValue}`;
                } else {
                    // Rimuoviamo istruzioni di copia se presenti
                    textToCopy = textToCopy.replace('Clicca per copiare negli appunti', '').trim();
                }
                
                navigator.clipboard.writeText(textToCopy).then(() => {
                    // Mostra feedback visivo
                    const originalClass = element.className;
                    const originalContent = element.innerHTML;
                    element.classList.add('copied');
                    element.innerHTML = '✅ Copiato!';
                    
                    setTimeout(() => {
                        element.className = originalClass;
                        if (elementId === 'atrLiveResult') {
                            const assetName = document.getElementById('detail-asset').textContent;
                            const atrValue = document.getElementById('detail-atr').textContent;
                            element.innerHTML = `
                                <div style="font-size: 1.3rem; margin-bottom: 10px;">
                                    <strong>${assetName}</strong> ATR(${atrPeriod}): <span style="color: var(--gold-solid)">${atrValue}</span>
                                </div>
                                <div style="font-size: 0.9rem; color: var(--text-muted);">
                                    Clicca per copiare negli appunti
                                </div>
                            `;
                        } else {
                            element.innerHTML = originalContent;
                        }
                    }, 2000);
                }).catch(err => {
                    console.error('Errore nella copia: ', err);
                    alert('Impossibile copiare negli appunti. Permessi mancanti o browser non supportato.');
                });
            }

            function showToast(message) {
                const toast = document.createElement('div');
                toast.style.position = 'fixed';
                toast.style.bottom = '20px';
                toast.style.right = '20px';
                toast.style.backgroundColor = 'var(--gold-solid)';
                toast.style.color = '#121212';
                toast.style.padding = '10px 20px';
                toast.style.borderRadius = '4px';
                toast.style.boxShadow = '0 4px 8px rgba(0,0,0,0.3)';
                toast.style.zIndex = '9999';
                toast.style.fontWeight = '600';
                toast.textContent = message;
                
                document.body.appendChild(toast);
                
                setTimeout(() => {
                    toast.style.opacity = '0';
                    toast.style.transition = 'opacity 0.5s ease';
                    setTimeout(() => {
                        document.body.removeChild(toast);
                    }, 500);
                }, 3000);
            }

            // Inizializza la pagina mostrando gli assets della categoria selezionata
            window.onload = function() {
                // Imposta gli assets iniziali
                selectCategory(document.querySelector('.selector-btn[data-category="indices"]'));
                
                // Carica le informazioni salvate localmente se disponibili
                const savedWins = localStorage.getItem('atsPro_wins');
                const savedLosses = localStorage.getItem('atsPro_losses');
                
                if (savedWins !== null && savedLosses !== null) {
                    wins = parseInt(savedWins);
                    losses = parseInt(savedLosses);
                    updateWinrate();
                }
                
                // Aggiungi salvataggio locale quando si aggiungono win/loss
                const originalAddWin = addWin;
                addWin = function() {
                    originalAddWin();
                    localStorage.setItem('atsPro_wins', wins);
                    localStorage.setItem('atsPro_losses', losses);
                };
                
                const originalAddLoss = addLoss;
                addLoss = function() {
                    originalAddLoss();
                    localStorage.setItem('atsPro_wins', wins);
                    localStorage.setItem('atsPro_losses', losses);
                };
                
                const originalResetWinrate = resetWinrate;
                resetWinrate = function() {
                    originalResetWinrate();
                    localStorage.setItem('atsPro_wins', 0);
                    localStorage.setItem('atsPro_losses', 0);
                };
            };

                    // Inizializzazione
                    updateWinrate();
    </script>
</body>
</html>