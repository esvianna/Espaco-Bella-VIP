import React from 'react';
import { Scissors, Sparkles, Flower2 } from 'lucide-react';

const services = [
  {
    title: "Gloss Express",
    description: "Ideal para suavizar e disfarçar fios brancos, dar brilho intenso e renovar o visual sem aspecto de coloração pesada.",
    icon: Sparkles,
    image: "https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
  },
  {
    title: "Cabelo",
    description: "Corte, escova, progressiva, tratamentos de hidratação profunda e finalização perfeita para o seu dia a dia.",
    icon: Scissors,
    image: "https://images.unsplash.com/photo-1562322140-8baeececf3df?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
  },
  {
    title: "Massagens",
    description: "Técnicas de relaxamento, bem-estar e alívio de tensões para você se desconectar e recarregar as energias.",
    icon: Flower2,
    image: "https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
  }
];

const Services = () => {
  return (
    <section id="servicos" className="py-24 bg-bella-nude/50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center max-w-2xl mx-auto mb-16">
          <h2 className="text-3xl md:text-4xl font-serif text-bella-text mb-4">
            Nossos Serviços
          </h2>
          <p className="text-lg text-bella-subtext">
            Soluções completas de beleza e bem-estar, com atendimento exclusivo e foco em resultados reais.
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <div key={index} className="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow group border border-transparent hover:border-bella-rose/30">
              <div className="h-48 overflow-hidden relative">
                <div className="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
                <img 
                  src={service.image} 
                  alt={service.title} 
                  className="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                />
                <div className="absolute top-4 left-4 z-20 bg-white/90 backdrop-blur-sm p-2 rounded-full text-bella-terracotta shadow-sm">
                  <service.icon size={20} />
                </div>
              </div>
              <div className="p-8">
                <h3 className="text-xl font-serif text-bella-text mb-3">{service.title}</h3>
                <p className="text-bella-subtext mb-6 line-clamp-3">{service.description}</p>
                <a href="https://wa.me/5541999999999" target="_blank" rel="noopener noreferrer" className="text-bella-terracotta font-medium flex items-center hover:text-[#c27a5d] transition-colors">
                  Agendar horário <span className="ml-2">→</span>
                </a>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;
