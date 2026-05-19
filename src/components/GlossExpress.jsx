import React from 'react';
import { MessageCircle } from 'lucide-react';

const GlossExpress = () => {
  return (
    <section id="gloss-express" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="bg-bella-rose/10 rounded-[2.5rem] p-8 md:p-16 relative overflow-hidden border border-bella-rose/20">
          
          {/* Decorative shapes */}
          <div className="absolute top-0 right-0 w-64 h-64 bg-white rounded-full mix-blend-overlay filter blur-3xl opacity-50 transform translate-x-1/2 -translate-y-1/2"></div>
          
          <div className="grid lg:grid-cols-2 gap-12 items-center relative z-10">
            <div>
              <span className="text-bella-terracotta font-bold tracking-wider uppercase text-sm mb-2 block">Destaque</span>
              <h2 className="text-3xl md:text-4xl font-serif text-bella-text mb-6">
                Gloss Express: uma alternativa leve para suavizar fios brancos
              </h2>
              <p className="text-lg text-bella-subtext mb-8">
                Para quem deseja suavizar os fios brancos sem partir para uma coloração pesada, o Gloss Express ajuda a renovar o visual, trazer brilho e manter um resultado mais natural e iluminado.
              </p>
              
              <ul className="space-y-4 mb-8">
                {['Menos agressivo que tinturas convencionais', 'Proporciona brilho espelhado', 'Manutenção mais fácil e espaçada'].map((item, i) => (
                  <li key={i} className="flex items-center text-bella-text">
                    <span className="w-1.5 h-1.5 bg-bella-terracotta rounded-full mr-3"></span>
                    {item}
                  </li>
                ))}
              </ul>

              <a href="https://wa.me/5541999999999" target="_blank" rel="noopener noreferrer" className="btn-primary w-full sm:w-auto">
                Quero saber se serve para meu cabelo
              </a>
            </div>
            
            <div className="relative">
              <div className="aspect-[4/3] rounded-2xl overflow-hidden shadow-lg border-4 border-white">
                <img 
                  src="https://images.unsplash.com/photo-1527799820374-dcf8d9d4a388?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                  alt="Cabelo com muito brilho e movimento" 
                  className="w-full h-full object-cover"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default GlossExpress;
