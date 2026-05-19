import React from 'react';
import { Star } from 'lucide-react';

const testimonials = [
  {
    name: "Ana C.",
    text: "O Gloss Express salvou meu cabelo! Escondeu meus brancos sem precisar de tinta pesada. O ambiente é maravilhoso, super relaxante.",
    role: "Cliente desde 2023"
  },
  {
    name: "Juliana T.",
    text: "Sempre faço meu corte e hidratação aqui. As meninas são super atenciosas e o resultado é sempre impecável. Recomendo muito!",
    role: "Cliente"
  },
  {
    name: "Mariana S.",
    text: "A massagem relaxante é o meu momento favorito do mês. É um espaço realmente acolhedor, você se sente em casa.",
    role: "Cliente desde 2024"
  }
];

const Testimonials = () => {
  return (
    <section className="py-24 bg-bella-nude/30 border-y border-bella-nude">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center max-w-2xl mx-auto mb-16">
          <h2 className="text-3xl md:text-4xl font-serif text-bella-text mb-4">
            Clientes que já viveram essa experiência
          </h2>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <div key={index} className="bg-white p-8 rounded-2xl shadow-sm relative">
              <div className="flex text-bella-terracotta mb-4">
                {[...Array(5)].map((_, i) => (
                  <Star key={i} size={18} fill="currentColor" />
                ))}
              </div>
              <p className="text-bella-subtext italic mb-6">"{testimonial.text}"</p>
              <div>
                <p className="font-serif text-bella-text text-lg">{testimonial.name}</p>
                <p className="text-sm text-bella-subtext">{testimonial.role}</p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Testimonials;
