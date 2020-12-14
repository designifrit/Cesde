using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace neighborhoodStore.Models
{
    public class PurchaseItem
    {
        public int ID { get; set; }
        public int ProductID { get; set; }
        public int ClientID { get; set; }

        public virtual StoreItem StoreItems { get; set; }
        public virtual ClientItem ClientItems { get; set; }
    }
}
