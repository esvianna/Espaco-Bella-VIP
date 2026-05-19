import React from 'react';
import { MapPin, MessageCircle } from 'lucide-react';

const Location = () => {
  return (
    <section id="localizacao" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          
          <div>
            <h2 className="text-3xl md:text-4xl font-serif text-bella-text mb-6">
              Estamos no Campo Comprido, em Curitiba
            </h2>
            <p className="text-lg text-bella-subtext mb-8">
              Um espaço de fácil acesso, preparado com todo conforto para receber você. Agende seu horário e venha nos fazer uma visita.
            </p>
            
            <div className="flex items-start mb-8">
              <MapPin className="text-bella-terracotta mt-1 mr-3 flex-shrink-0" size={24} />
              <div>
                <p className="font-medium text-bella-text text-lg">Espaço Bella VIP</p>
                <p className="text-bella-subtext">R. Eduardo Sprada, 0000 - Campo Comprido</p>
                <p className="text-bella-subtext">Curitiba - PR</p>
              </div>
            </div>

            <div className="flex flex-col sm:flex-row gap-4">
              <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer" className="btn-secondary">
                Como chegar
              </a>
              <a href="https://wa.me/5541999999999" target="_blank" rel="noopener noreferrer" className="btn-primary group">
                <MessageCircle className="mr-2 h-5 w-5 group-hover:scale-110 transition-transform" />
                Agendar pelo WhatsApp
              </a>
            </div>
          </div>

          {/* Map Placeholder */}
          <div className="bg-bella-nude rounded-2xl overflow-hidden h-[400px] shadow-inner relative border border-bella-nude flex items-center justify-center">
            <div className="text-center p-6 bg-white/80 backdrop-blur-sm rounded-xl m-4 border border-bella-rose/20">
              <MapPin className="mx-auto text-bella-terracotta mb-2" size={32} />
              <p className="text-bella-text font-medium mb-1">Mapa do Google</p>
              <p className="text-sm text-bella-subtext">Para a versão WordPress, inserir o widget do Google Maps aqui com o endereço exato.</p>
            </div>
          </div>

        </div>
      </div>
    </section>
  );
};

export default Location;
