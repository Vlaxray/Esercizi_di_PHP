import { motion } from 'framer-motion';
import { useFormik } from 'formik';

const AddProductForm = () => {
  const formik = useFormik({
    initialValues: { name: '', brand: '', type: 'cigar', strength: 3 },
    onSubmit: async (values) => {
      const response = await fetch('/api/products', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(values),
      });
      if (response.ok) alert("Prodotto aggiunto con successo!");
    },
  });

  return (
    <motion.div 
      initial={{ opacity: 0 }} 
      animate={{ opacity: 1 }}
      className="bg-gray-900 bg-opacity-50 p-8 rounded-xl backdrop-blur-md"
    >
      <form onSubmit={formik.handleSubmit}>
        <input
          name="name"
          onChange={formik.handleChange}
          placeholder="Nome prodotto"
          className="bg-transparent border-b-2 border-cyan-400 focus:outline-none"
        />
        {/* Altri campi qui... */}
        <button 
          type="submit"
          className="mt-4 px-6 py-2 bg-cyan-500 hover:bg-cyan-600 rounded-lg transition-all"
        >
          Aggiungi
        </button>
      </form>
    </motion.div>
  );
};