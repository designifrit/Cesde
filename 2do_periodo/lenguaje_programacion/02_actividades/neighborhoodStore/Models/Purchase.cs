using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace neighborhoodStore.Models
{
    public enum Membership
    {
        A, B, C
    }

    public class Purchase
    {
        public int PurchaseID { get; set; }
        public int ProductID { get; set; }
        public int ClientID { get; set; }
        public Membership? Membership { get; set; }

        public virtual Product Product { get; set; }
        public virtual Client Client { get; set; }
    }
}